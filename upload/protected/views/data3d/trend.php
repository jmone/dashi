链接格式：http://dashi.yiishare.com/index.php?r=data3d/trend&max=50&len=10 (50表示最近50期数据，10表示统计连续10其的A值)
<?php
/*
  $this->Widget('ext.highcharts.HighchartsWidget', array(
     'options'=>'{
        "title": { "text": "数据统计图表" },
        "xAxis": {
           "categories": ["3", "2", "1"]
        },
        "yAxis": {
           "title": { "text": "Fruit eaten" }
        },
        "series": [
           { "name": "百位", "data": [1, 0, 4] },
           { "name": "十位", "data": [5, 7,3] },
           { "name": "个位", "data": [5, 3,1] }
        ]
     }'
  ));
*/
   $this->Widget('ext.highcharts.HighchartsWidget', array(
     'options'=>array(
        'title' => array('text' => $max.'/'.$len.'A线图'),
        'xAxis' => array(
           'categories' => $trend['categories']
        ),
        'yAxis' => array(
           'title' => array('text' => '3D')
        ),
        'series' => array(
           array('name' => '百位', 'data' => $hundred),
           array('name' => '十位', 'data' => $ten),
           array('name' => '个位', 'data' => $one)
        ),
	'credits' => array('enabled' => false),
     )
  ));
 
?>
