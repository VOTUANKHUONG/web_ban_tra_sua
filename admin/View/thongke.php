 
      
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
     google.load('visualization', '1.0', {'packages':['corechart']});
     google.setOnLoadCallback(drawVisualization);
     function drawVisualization() {
		 				//thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
            // tạo bảng
            var data = new google.visualization.DataTable();
            var tenhh = new Array();
            var soluongban = new Array();
            var rows = new Array();
            var datahh = 0;
            var slban = 0;

            <?php
              $hh = new hanghoa();
              $result = $hh->getThongKe_MatHang();
              while($set=$result->fetch()){
                $tenhh = $set['tenhh'];
                $soluong = $set['soluong'];
                echo "tenhh.push('".$tenhh."');";
                echo "soluongban.push('".$soluong."');";
              }
            ?>
            // + dòng và cột
            for(var i=0;i<tenhh.length;i++)
            {
              datahh = tenhh[i];
              slban=parseInt(soluongban[i]);
              rows.push([datahh,slban]);
            }
            // tạo cột trong DataTable
            data.addColumn('string', "Hàng hóa");
            data.addColumn('number', "Số lượng bán");
            data.addRows(rows);
            // option
            var option={
              title: 'Thống kê số lượng bán hàng hóa',
              'width': 600,
              'height': 400,
              'backgroundColor': '#ffffff',
              is3D:true
            };
            // ColumnChart, PieChart, BarChart, LineChart
            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data,option);
	 }
                   
    </script>
      <div>
        <div class="thongke">
        <div style=" width:50%;  float: left;"   id="chart_div">dfsf</div>
        <div style=" width:50%;  float: right"   id="chart_div1">dsfd</div>    
      </div>
 
 