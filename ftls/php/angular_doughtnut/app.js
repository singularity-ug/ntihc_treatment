var app = angular.module('app', []);

app.controller('myCtrl', function ($scope, $http) {

    $scope.error = false;
    $scope.success = false;

    $scope.fetchfruit = function(){
        $http.get('fetchfruit.php').success(function(data){
            $scope.fruits = data;
        });
    }

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
                type: 'pie', // change the value of pie to doughtnut for doughnut chart
                data: {
                    datasets: [{
                        data: data.total,
                        backgroundColor: ['blue', 'green', 'red', 'yellow', 'blue', 'green', 'red', 'yellow']
                    }],
                    labels: data.fruitname
                },
                options: {
                    responsive: false
                }
            });

        });
    }

    $scope.clear = function(){
        $scope.error = false;
        $scope.success = false;
    }

});