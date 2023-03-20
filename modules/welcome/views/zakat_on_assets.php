      <!-- Content Header (Page header) -->
      <div class="content-header">
      <div class="container-fluid">
        <h3 style="text-align: center;">If you wish to calculate your Zakat amount with ease, please use the Zakat Calculator below.</h3>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Assets</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-2">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                      <label for="exampleInputEmail1" style="width: auto; margin-top: 5px;">Cash</label>
                  </div>
                  <div class="col-4">
                    <input type="number" class="form-control two_point_five_percent"  placeholder="Enter Amount">
                  </div>
                  <div class="col-2">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                      <label for="exampleInputEmail1" style="width: auto; margin-top: 5px;">Investments</label>
                  </div>
                  <div class="col-4">
                    <input type="number" class="form-control two_point_five_percent"  placeholder="Enter Amount">
                  </div>
                    <!-- </div> -->
                </div>
                <div class="row">
                  <div class="col-sm-2">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                      <label for="exampleInputEmail1" style="margin-top: 0p;">Business Inventory</label>
                  </div>
                  <div class="col-sm-4">
                    <input type="number" class="form-control two_point_five_percent" style="margin-top: 4px;"  placeholder="Enter Amount">
                  </div>
                  <div class="col-sm-2">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                      <label for="exampleInputEmail1" style="margin-top: 5px; float: left;">Precious metals and jewelery</label>
                  </div>
                  <div class="col-sm-4">
                    <input type="number" style="margin-top: 8px;" class="form-control two_point_five_percent"  placeholder="Enter Amount">
                  </div>
                    <!-- </div> -->
                </div>
                <br>
                <div class="row">
                  <div class="col-sm-2">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                      <label for="exampleInputEmail1" style="margin-top: 5px; float: left;">Real Estate</label>
                  </div>
                  <div class="col-sm-4">
                    <input type="number" style="margin-top: 4px;" class="form-control two_point_five_percent"  placeholder="Enter Amount">
                  </div>
                  <div class="col-sm-2">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                      <label for="exampleInputEmail1" style="float: left; margin-top: 4px;">Other Assets</label>
                  </div>
                  <div class="col-sm-4">
                    <input type="number" class="form-control two_point_five_percent" style="margin-top: 4px;"  placeholder="Enter Amount">
                  </div>
                    <!-- </div> -->
                </div>
                </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Liabilities</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                      <label for="exampleInputEmail1" style=" margin-top: 5px;">Borrowed money, goods bought on credit</label>
                  </div>
                  <div class="col-4">
                    <input type="number" class="form-control liability"  placeholder="Enter Amount" style="width: auto; margin-left: 20px; float: right;">
                  </div>
                  <div class="col-8">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                      <label for="exampleInputEmail1" style="margin-top: 5px;">Wages due to employees</label>
                  </div>
                  <div class="col-4">
                    <input type="number" class="form-control liability"  placeholder="Enter Amount" style="width: auto; margin-left: 20px; margin-top: 4px; float: right;">
                  </div>
                    <!-- </div> -->
                </div>
                <div class="row">
                  <div class="col-8">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                      <label for="exampleInputEmail1" style="margin-top: 5pX;">Taxes, Rent, utility bills due immediately</label>
                  </div>
                  <div class="col-4">
                    <input type="number" class="form-control liability" style="width: auto; margin-left: 20px; margin-top: 4px; float: right;"  placeholder="Enter Amount">
                  </div>
                </div>
            </div>
          </div>
        </div>
       
        <div class="col-lg-6">
          <div class="row">
            <div class="col-4">
              <h3 style="padding-left: 40px;">
                Total Net Worth: 
              </h3>
            </div>
            <div class="col-8">
              <h3 style="font-weight: bold; color: green; align-self: self-start;">Rs. <span id="net_worth" style="font-weight: bold; color: green;">0</span></h3>
            </div>
          </div>
<div class="row">    
    <div class="col-4">
      <h3 style="padding-left: 40px;">
        Zakat Payable:
      </h3>
    </div>
    <div class="col-8">
      <h3 style="font-weight: bold; color: green; align-self: self-start;">Rs. <span id="zakat_payable" style="font-weight: bold; color: green;">0</span></h3>    </div>
</div>
        </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <script>
              alert('ma sha Allah!'); 
      // var agriculture_income_with_both_labor_and_investment = document.getElementById('agriculture_income_with_both_labor_and_investment');
      // agriculture_income_with_both_labor_and_investment.addEventListener('input', ()=>{
      //   var net_worth = document.getElementById('net_worth');
      //   var zakat_payable = document.getElementById('zakat_payable');
      //   var amount = agriculture_income_with_both_labor_and_investment.value;
      //   net_worth.textContent = amount;
      // })
      // var net_worth = document.getElementById('net_worth');
      // var zakat_payable = document.getElementById('zakat_payable');
      var elements_ten_percent = document.getElementsByClassName('ten_percent');
      var elements_five_percent = document.getElementsByClassName('five_percent')
      var net_worth = document.getElementById('net_worth');
      // var net_worth = document.getElementById('net_worth');
      var zakat_payable = document.getElementById('zakat_payable');
      // var zakat_payable = document.getElementById('zakat_payable');


      // for (let index = 0; index < elements_ten_percent.length; index++) {
      //   elements_ten_percent[index].addEventListener('input', ()=>{
      //     var net_worth_number =  0;
      //     var amount = 0;
      //     var amount2 = 0;
      //     for (let index = 0; index < elements_ten_percent.length; index++) {
      //       amount += Number(elements_ten_percent[index].value);
      //     }
      //     for (let index = 0; index < elements_five_percent.length; index++) {
      //       amount2 += Number(elements_five_percent[index].value);
      //     }
      //     net_worth_number +=  amount + amount2;
      //     net_worth.textContent = net_worth_number;
      //     zakat_payable.textContent = (amount/100) * 10;
      //     // alert('hi')
      //    })
        
      // }
      // for (let index = 0; index < elements_five_percent.length; index++) {
      //   elements_five_percent[index].addEventListener('input', ()=>{
      //     var net_worth_number =  0;
      //     var amount = 0;
      //     var amount2 = 0;
      //     for (let index = 0; index < elements_five_percent.length; index++) {
      //       amount += Number(elements_five_percent[index].value);
      //     }
      //     for (let index = 0; index < elements_ten_percent.length; index++) {
      //       amount2 += Number(elements_ten_percent[index].value);
      //     }
      //     // alert(amount2)
      //     net_worth_number +=  amount + amount2;
      //     net_worth.textContent = net_worth_number;
      //     zakat_payable.textContent = (amount/100) * 5;
      //     // alert('hi')
      //    })
        
      // }
      var test = document.getElementsByClassName("form-control");
      var net_amount = 0;
      var old_value = 0;
      for (let index = 0; index < test.length; index++) {
        console.log(test.length)
        test[index].addEventListener('input', ()=>{
          var amount = 0;
          for (let index = 0; index < test.length; index++) {
            if(test[index].classList.contains('liability')){
              // alert('subhan Allah !');
              amount -= Number(test[index].value);
            // zakat_amount += Number(test[index].value)/100 * 5;
          }else{
            amount += Number(test[index].value);
          }
          }
          
          var zakat_amount = 0;
          if (amount >= 125693.0136) {
            for (let index = 0; index < test.length; index++) {
          if(test[index].classList.contains('two_point_five_percent')){
            zakat_amount += Number(test[index].value)/100 * 2.5;
          }

          }
          }else{
            zakat_amount = 0;
          }

          net_worth.textContent = amount;
          zakat_payable.textContent = zakat_amount;
          // alert(net_amount)
          // alert(test[index].classList.contains('five_percent'))
        });

        
      }
    </script>