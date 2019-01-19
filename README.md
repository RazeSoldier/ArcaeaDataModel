# ArcaeaDataModel
Arcaea游戏数据结构的面对对象的模型

## 用法
本库提供了一些帮助类来模型化原始数据，助于面对对象编程。

### 曲包
#### Pack类
位置：src/Pack/Pack.php  
功能：单个曲包的模型

#### PackMap类
位置：src/Pack/PackMap.php  
功能：曲包映射  
使用注意：请用PackMapBuilder获得本类的实例

#### PackMapBuilder类
位置：src/Pack/PackMapBuilder.php  
功能：用于构建PackMap

#### PackSearcher类
位置：src/Pack/PackSearcher.php  
功能：用于在PackMap里搜索特定的Pack

### 歌曲
#### Song类
位置：src/Song/Song.php  
功能：单一歌曲的模型

#### SongMap类
位置：src/Song/SongMap.php  
功能：歌曲映射  
使用注意：请用SongMapBuilder来获取本类的实例

#### SongMapBuilder类
位置：src/Song/SongMapBuilder.php  
功能：用于构建SongMap

#### SongSearcher类
位置：src/Song/SongSearcher.php  
功能：用于在SongMap里搜索特定的Song

### 世界模式
#### Map类
位置：src/World/Map.php  
功能：世界模式里地图的模型
使用注意：请用MapParser获得本类的实例

#### MapParser类
位置：src/World/MapParser.php  
功能：用于解析世界模式里的梯子Raw数据

#### Step类
位置：src/World/Step.php  
功能：世界模式里地图上台阶的模型
使用注意：请用StepParser获得本类的实例

#### StepParser类
位置：src/World/StepParser.php  
功能：用于解析世界模式里梯子的台阶

## 贡献
欢迎各位大佬贡献代码，本库使用GPL-2.0许可证授权。