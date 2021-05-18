#important
import sys
sys.path.append('C:\\Users\\Admin\\AppData\\Roaming\\Python\\Python38\\site-packages')

# 从BASE里面导入插入数据库的模块，注意更改EXC_TEST, TEST的模块名
from BASE import EXC_TEST, TEST
import numpy as np

# 所执行的上传数据库方法，注意修改EXC_TEST()、TEST()、exc.Test的名称
def run_app():
    # initialization
    exc = EXC_TEST()
    db = TEST()

    db.insert(exc.Test)
    db.commit()
    db.disconnect()

if __name__ == '__main__':
    run_app()
