#读取文件类，注意修改类名EXC_TEST、source_path中的路径和self.Test名及其csv文件名
class EXC_TEST(EXC):
    def __init__(self):
        EXC.__init__(self)
        source_path = '..//..//uploaded_files//'
        self.Test = pd.read_csv(source_path + 'test.csv')

# 输入插入数据的数据库指令类，注意修改类名，按所需录入数据进行数据库语句的更改
class TEST(DB):
    def __init__(self):
        DB.__init__(self)

    def insert(self,df):
        for index, row in df.iterrows():
            self.cursor.execute(f"INSERT INTO [WF_Remittance] ([Invoice #],[PO #],[Date],[Amount],[StoreID],[OrderType]) values(?,?,?,?,?,?);",
                              row['Invoice #'],
                              row['PO #'],
                              row['Date'],
                              row['Amount'],
                              row['StoreID'],
                              row['OrderType']
                              )
