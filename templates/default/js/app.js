'use strict';

var app = angular.module('sondasApp', []);
app.controller("mainController", function($scope, $http, $location, $anchorScroll ) {
    $scope.f_show_user = function () {
        //$scope.show_user = ($scope.show_user == 1) ? 0 : 1;
        $scope.show_user = !$scope.show_user;
    };
    $scope.f_show_export = function () {
        //$scope.show_export = ($scope.show_export == 1) ? 0 : 1;
        $scope.show_export = !$scope.show_export;
    };
    // seleccion de estacion en el select
    $scope.select_station = 'station_0';
    // seleccionar todos

    $scope.checkAll = function (station) {
        var obj=document.getElementById('station_'+station);
        var objs=obj.getElementsByClassName('sensores-todos');
        var value=document.getElementById('sensor-todos-'+station);
        for (var i=0; i<objs.length; i++) {
            if (objs[i].id == 'sensor-'+station) {
                objs[i].checked = value.checked;
            }
        }
    };
    $scope.export_data = function (input, station) {

    };
    $scope.station_active = function (input, station) {
        //console.log("station-->"+station);
        var obj=document.getElementById(station);
        var objs=obj.getElementsByClassName('todos');
        var objs2=obj.getElementsByClassName('sensores-todos');
        var objs3=obj.getElementsByClassName('sensores');
        //console.log("Cantidad de todos--->"+objs.length);
        input.checked = !input.checked;
        if (input.checked) {
            // activo
            var value = false;
            var bcolor = '#000000';
        } else {
            // desactivo
            var value = true;
            var bcolor = '#dadada';
        }
        for (var i=0; i<objs.length; i++) {
            if (objs[i].id != 'activar' && objs[i].type != 'hidden') {
                objs[i].disabled = value;
            } else {
                objs[i].disabled = false;
            }
        }
        for (var i=0; i<objs2.length; i++) {
            objs2[i].disabled = value;
        }
        objs3[0].disabled = value;
        //
        var objs4 = obj.getElementsByTagName('label');
        for (var i=0; i<objs4.length; i++) {
            objs4[i].style.color = bcolor;
        }
    };
    $scope.form_new = function (method, action, atrib_name, atrib_value) {
        var form = document.createElement('form');
        form.setAttribute('method', method);
        form.setAttribute('action', action);
        var myvar = document.createElement('input');
        myvar.setAttribute('name', atrib_name);
        myvar.setAttribute('type', 'hidden');
        myvar.setAttribute('value', atrib_value);
        form.appendChild(myvar);
        document.body.appendChild(form);
        form.submit();
    };
});
