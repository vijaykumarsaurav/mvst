angular.module('myApp', [])
    .controller('namesCtrl', ['$scope' , '$http', function ($scope,$http) {
        $scope.count = 0;
        $scope.stateCities = stateCities;
        $scope.selectedCities = selectedCities;
        $scope.job_types = job_types;

        var hedu_option = [];
        for (var i = 0; i < educationList.length; i++) {
            hedu_option.push(educationList[i].name);
        }
        $scope.educationTypes = hedu_option;

        $scope.selectedState = [];
        //  $rootScope.totalSelectedCities = []; 
        $scope.selectState = function () {

            $scope.selectedCities = [];

            $scope.selectedState;
            //console.log($scope.selectedState[this.x.state]);



            var sstate = [];
            $.each($("input[name='state']:checked"), function () {
                sstate.push($(this).val());
            });
            console.log("My favourite sports are: " + sstate.join(", "));
            var dist_option = [];

            for (var i = 0; i < stateCities.length; i++) {
                if (sstate.indexOf(stateCities[i].state) >= 0) {
                    var dist = stateCities[i].districts;
                    for (var j = 0; j < dist.length; j++) {
                        dist_option.push(dist[j]);
                    }
                }
            }
        
            if(dist_option.length){
                $scope.selectedCities = dist_option;
            }
            else{
                $scope.selectedCities = selectedCities;
            }

            



            // console.log(dist_option);
        };


        $http.get("api/musers.php?q=1")
        .then(function(response) {
            if(response.status){
                $scope.listOfUser =  JSON.parse(response.data.users); 
                $scope.images =   JSON.parse(response.data.images); 
              }
              
              console.log($scope.images);
           // $scope.myWelcome = response.data;
        });
    }]);




function unique(arr) {
    var u = {}, a = [];
    for (var i = 0, l = arr.length; i < l; ++i) {
        if (!u.hasOwnProperty(arr[i])) {
            a.push(arr[i]);
            u[arr[i]] = 1;
        }
    }
    return a;
}


function showPhtos(){
    $('.photo_galary').show();
}

$(document).ready(function () {
        // $.ajax({
        //     type: "get",
        //     url: 'api/musers.php',
        //     data: { "q": 1 },
        //     success: function (data) {
        //         data = JSON.parse(data);

        //         if(data.status){
        //           var listofUser =  data.data; 
        //           for(var i=0; i<listofUser.length; i++){
                    
        //           }
        //         }
                

        //         console.log(data.data);

        //     }
        //     ,
        //     dataType: "html"
        // });




    $("#create").click(function () {

    });




}); // ready close
