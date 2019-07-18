var app = angular.module('app', []);

app.controller('myCtrl', function ($scope, $http) {

    $scope.error = false;
    $scope.success = false;

    $scope.purchase = function(){
        $http.post('purchase.php', $scope.buy)
        .success(function(data){
            if(data.error){
                $scope.error = true;
                $scope.success = false;
                $scope.message = data.message;
            }
            else{
                $scope.success = true;
                $scope.error = false;
                $scope.message = data.message;
                $scope.fetchsales();
                $scope.buy = '';
            }
        });
    }

    //this fetches the data for our table
    $scope.fetchsales = function(){
        $http.get('fetchsales.php').success(function(data){

            var ctx = document.getElementById("dvCanvas").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [
                        {
                            label: '2017',
                            backgroundColor: 'red',
                            borderColor: 'red',
                            data: data.prev,
                            borderWidth: 1,
                            fill: false
                        },
                        {
                            label: '2018',
                            backgroundColor: 'skyblue',
                            borderColor: 'skyblue',
                            data: data.year,
                            borderWidth: 1,
                            fill: false
                        }

                    ]
                },
                options: {
                    responsive: true,
                    title:{
                        display:true,
                        text:'2017 vs 2018'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Month'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Value'
                            },
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });

        });
    }

    $scope.clear = function(){
        $scope.error = false;
        $scope.success = false;
    }

});