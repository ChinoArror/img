<?php
//初始化随机数生成器种子，这行代码也可以删除
$seed = time();
//获取随机数
$num = rand(1,45);
//拼接图片地址
$picpath = "https://gitlab.com/KINGWDY/photoapi/raw/main/".$num.".png";
//重定位到图片
die(header("Location: $picpath"));
?>



作者: KINGWDY
链接: https://tonywdy.github.io/posts/2a76453c/#%E6%96%B0%E5%BB%BA%E4%B8%80%E4%B8%AAvercel-json
来源: KING's Empire
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。
