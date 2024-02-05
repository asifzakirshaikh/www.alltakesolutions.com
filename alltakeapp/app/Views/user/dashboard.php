<?php
	use App\Models\User_model;
	use App\Models\Blog_model;
    $blog_model = new Blog_model();
    $user_model = new User_model();
?>

<div class="container">
  <h4 class="mb-4">Dashboard</h4>
  <div class="row">
    <div class="col-lg-3">
      <div class="col-lg-12 p-3 bg-blue rounded-4 border-red shadow-sm">
        <h5 class=" text-white">Total Blogs</h5>
        <h1 class="text-white"><?php echo $total_blogs; ?></h1>
      </div>
    </div>
    <div class="col-lg-9 py-3 mb-3 rounded-4  border">
      <div id="chart_div"></div>
    </div>
  </div>
</div>


  <div class="container py-5">
    <div class="col-lg-6 shadow-sm">
        <div id="piechart_3d" style="width: 550px; height: 400px;"></div>
    </div>
  </div>
      
    

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Title', 'Total'],
          ['Users',     <?php echo $total_users; ?>],
          ['Blogs', <?php echo $total_blogs; ?>]
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>



	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    
      google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['User', 'Total Blogs',],
        	<?php
        	

            foreach($user_count as $b)
            {

                $name = $b->user_fullname;
                $email = $b->user_email;
                $total_blog = $blog_model->where('blog_author',$name)->countAllResults();


                echo "['".$name."',".$total_blog."],";
            }

          ?>
      ]);

      var options = {
        title: 'Total Blogs',
        chartArea: {width: '60%'},
        hAxis: {
          title: 'Total Blogs',
          minValue: 0
        },
        vAxis: {
          title: 'User'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>