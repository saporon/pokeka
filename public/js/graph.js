window.onload = function() {
	
	//グラフを描画
   var ctx = document.getElementById("myChart");
   
    var data = {
    	labels: graph_labels,
    	datasets: [
    		{
    			label: 'PSA10平均価格',
				data:graph_value_ave_grade1,
				borderColor: "rgba(0,0,255,1)",
         		backgroundColor: "rgba(0,0,0,0)"
			},
			{
				label: '美品平均価格',
				data: graph_value_ave_grade2,
				borderColor: "rgba(0,255,0,1)",
        		backgroundColor: "rgba(0,0,0,0)"
			},
			{
				label: '傷あり平均価格',
				data: graph_value_ave_grade3,
				borderColor: "rgba(255,0,0,1)",
         		backgroundColor: "rgba(0,0,0,0)"
			}
		]
    };
	var options = {
		plugins: {
			title: {
				display: true,
                text: '平均価格推移グラフ'
				
			}
			
		},
		scales: {
        x:{
            display: true,
            title:{
                display: true,
                text: '月/日'
            }
        },
        y:{
            display: true,
            title:{
                display: true,
                text: '価格'
            },
        },
    },
		
	};
    var mychart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
});
};
