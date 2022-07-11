var app = angular.module('myapp',[]);
                app.controller('mycontroller',function($scope,$http)
                {
                    var api = 'http://127.0.0.1:8000/api/chitiethdbans/';
                    
                    $scope.LoadCart = function () {
                        $scope.cart = JSON.parse(localStorage.getItem('cart'));
                    }
                    $scope.LoadCart();

                    $scope.Tang = function (sp) {
                        var index = $scope.cart.indexOf(sp);
                        if (index >= 0) {
                            $scope.cart[index].quantity += 1;
                        }
                        localStorage.setItem('cart', JSON.stringify($scope.cart));
                    }
                
                    $scope.Giam = function (sp) {
                        var index = $scope.cart.indexOf(sp);
                        if (index >= 0 && $scope.cart[index].quantity >= 2) {
                            $scope.cart[index].quantity -= 1;
                        }
                        localStorage.setItem('cart', JSON.stringify($scope.cart));
                    }
                
                    $scope.Xoa = function (sp) {
                        var index = $scope.cart.indexOf(sp);
                        $scope.cart.splice(index, 1);
                        localStorage.setItem('cart', JSON.stringify($scope.cart));
                        alert("Đã xóa sản phẩm thành công");
                    }
                      /*Thanh toán*/
    $scope.LoadCartTT = function () {
        $scope.total = 0;
        $scope.listSPTT = JSON.parse(localStorage.getItem('cart'));
        $scope.listSPTT.forEach(function (item, i) {
            $scope.total += item.quantity * item.unit_price;
        });
    };
  

    $scope.totalprice = function(){
        $scope.total = 0;
        $scope.listSP = JSON.parse(localStorage.getItem('cart'));
        if($scope.listSP==null){
           return  $scope.total = 0;
        }
        else{
            for(var i=0; i<$scope.listSP.length;i++){
                $scope.total+=$scope.listSP[i].quantity*$scope.listSP[i].unit_price;
            }
        }
        return  $scope.total;
    }
    $scope.total = $scope.totalprice();


   
    $scope.XoaCart = function () {
        localStorage.setItem('cart', null);
        location.reload();
    }
     $scope.CreateHoaDon = function (sp) {
        let bills_ban = {};
        bills_ban.id_kh = $('#id_kh').val();
        bills_ban.date_order = $('#date_order').val();
        bills_ban.tong_tien = $('#tong_tien').val();
        bills_ban.payment = $('#payment').val();
        bills_ban.status = $('#status').val();
        bills_ban.note = $('#note').val();
        bills_ban.bill_detail_ban = [];
        $scope.listSPTT.forEach(function (item, i) {
            bills_ban.bill_detail_ban.push({ id: item.id_kh, SoLuong: item.tongtien });
        });
        $http({
            method: 'POST',
            url: api,
            datatype: 'json',
            data: JSON.stringify(bills_ban)
        }).then(function (response) {
            if (response.data.ok == 1) {
                alert('Thêm thành công');
            }
            else {
                alert('Có lỗi');
            }
        });
    };      

   
});


