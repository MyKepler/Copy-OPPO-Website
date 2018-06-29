/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-05-22 02:19:12
 * @version $Id$
 */

$(init) 
function init() {
  //logic
}

var map = new BMap.Map("myMap"); 
var first_point = new BMap.Point(120.17,30.30);

map.centerAndZoom(first_point, 15);     
map.addControl(new BMap.NavigationControl());   
map.addControl(new BMap.ScaleControl());    
map.addControl(new BMap.OverviewMapControl());    
map.addControl(new BMap.MapTypeControl());    
map.setCurrentCity("杭州"); 
map.enableScrollWheelZoom();

var shop_info=[
	[119.958521,30.053781,"浙江省杭州市富阳市桂花西路25-3号","0571-63586561","08:30-21:30"],
	[120.165992,30.276094,"浙江省杭州市下城区体育场路367号","0571-87881021","09:30-21:30"],
	[119.948555,30.277537,"浙江省杭州市余杭区余杭街道安乐路148-150号","0571-86101583","08:30-22:00"],
	[119.948949,30.278218,"浙江省杭州市余杭区余杭街道禹航路937号","0571-88661716","08:30-22:00"],
	[119.957836,30.054174,"浙江省杭州市富阳市富春街道笕浦西路190号","0571-63588880","08:00-21:00"],
	[120.165721,30.274879,"浙江省杭州市上城区武林路397-1号","0571-87881727","09:30-21:30"],
	[120.002141,30.016826,"浙江省杭州市富阳市春江街道大桥南路288","0571-63586699","08:00-21:00"],
	[120.275399,30.170955,"浙江省杭州市萧山区萧绍路1434号","0571-57161133","08:30-21:30"],
	[119.958015,30.054186,"浙江省杭州市富阳市桂花西路26-8","0571-23282223","09:00-21:00"],
	[120.276109,30.170262,"浙江省杭州市萧山区市心广场D座1016","0571-82106502","08:30-21:30"],
	[120.088798,30.328514,"浙江省杭州市西湖区西湖区三墩镇厚诚路188号","0571-88953179","08:30-21:30"],
	[120.309963,30.425599,"浙江省杭州市余杭区临平县临平北大街13-15号","0571-89185255","08:30-21:30"],
	[119.695283,29.800067,"浙江省杭州市桐庐县杭州市桐庐县迎春南路405号","0571-64269869","09:00-21:00"],
	[119.998089,30.388120,"浙江省杭州市余杭区航泰路135号","0571-57898685","09:00-21:48"],
	[120.266374,30.356099,"浙江省杭州市余杭区乔司街道葛家车村269号","0571-86282050","09:00-22:00"],
];

var shop_point;
var p;

// 创建地址解析器实例     
var myGeo = new BMap.Geocoder();

// 将地址解析结果显示在地图上，并调整地图视野  


function OnClick(address,tel,time,point){
	var content = '地址：' + address + '<br/>' + '电话：' + tel + '<br/>' + '营业时间：' + time;
	var searchInfoWindow ;
	searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
		title  : address,      //标题
		width  : 290,             //宽度
		height : 105,              //高度
		panel  : "panel",         //检索结果面板
		enableAutoPan : true,     //自动平移
		searchTypes   :[
			BMAPLIB_TAB_SEARCH,   //周边检索
			BMAPLIB_TAB_TO_HERE,  //到这里去
			BMAPLIB_TAB_FROM_HERE //从这里出发
		]
	});
  		
	point.addEventListener("click", function(e){
    	searchInfoWindow.open(point);
   	})
}

for (var i = 0; i < shop_info.length; i++){
	map.centerAndZoom(first_point, 11);
	var point= new BMap.Marker(new BMap.Point(shop_info[i][0],shop_info[i][1]));//设置marker的坐标
	var address = shop_info[i][2];
	var tel = shop_info[i][3];
	var time = shop_info[i][4];
	map.addOverlay(point);
	OnClick(address,tel,time,point);
}
