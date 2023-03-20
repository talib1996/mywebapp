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
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"> Production / Earnings </h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                        <label for="exampleInputEmail1">Agriculture Income With Both Labor and Investment</label>
                  </div>
                  <div class="col-sm-8">
                  <input type="number" id="agriculture_income_with_both_labor_and_investment" class="form-control five_percent"  placeholder="Enter Amount">
                  </div>
                </div>

                  <div class="row pt-2">
                  <!-- <div class="col-sm-6"> -->
                      <!-- <div class="row"> -->
                  <div class="col-sm-4">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                    <label for="exampleInputEmail1" style="width: auto; margin-top: 5px;">Agriculture Income With Either Labor or Investment</label>
                  </div>
                  <div class="col-sm-8">
                    <input type="number" id="agriculture_income_with_both_labor_or_investment" class="form-control ten_percent"  placeholder="Enter Amount">
                  </div>
                    <!-- </div> -->
                <!-- </div> -->
                  <!-- </div> -->
              
                    <!-- </div> -->
                </div>
              
                <div class="row pt-2">
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-sm-4">
                        <!-- <div class="form-group" style="display: inline-flex;"> -->
                          <label for="exampleInputEmail1" >Salaries and Wages</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="number" id="salaries_or_wages" class="form-control ten_percent" placeholder="Enter Amount">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 pt-2">
                    <div class="row">
                      <div class="col-sm-4">
                        <!-- <div class="form-group" style="display: inline-flex;"> -->
                          <label for="exampleInputEmail1" >Pensions</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="number" id="pensions" class="form-control ten_percent"  placeholder="Enter Amount">
                      </div>
                    </div>
                  </div>
              
                    <!-- </div> -->
                </div>
                <div class="row pt-2">
                  <div class="col-sm-2">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                      <label for="exampleInputEmail1" style="margin-top: 5px; float: left;">Business Income</label>
                  </div>
                  <div class="col-sm-4">
                    <input type="number" id="business_income" style="margin-top: 4px;" class="form-control five_percent"  placeholder="Enter Amount">
                  </div>
                  <div class="col-sm-2">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                      <label for="exampleInputEmail1" style="float: left; margin-top: 4px;">Capital Gains</label>
                  </div>
                  <div class="col-sm-4">
                    <input type="number" id="capital_gains" class="form-control ten_percent" style="margin-top: 4px;"  placeholder="Enter Amount">
                  </div>
                    <!-- </div> -->
                </div>
                <div class="row">
                  <div class="col-sm-2">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                      <label for="exampleInputEmail1" style="margin-top: 5px; float: left;">Rental Income</label>
                  </div>
                  <div class="col-sm-4">
                    <input type="number" id="rental_income" style="margin-top: 4px;" class="form-control ten_percent"  placeholder="Enter Amount">
                  </div>
                  <div class="col-sm-2">
                    <!-- <div class="form-group" style="display: inline-flex;"> -->
                      <label for="exampleInputEmail1" style="float: left; margin-top: 4px;">Gifts of God</label>
                  </div>
                  <div class="col-sm-4">
                    <input type="number" id="gifts_of_God" class="form-control twenty_percent" style="margin-top: 4px;"  placeholder="Enter Amount">

                    <!-- <input type="number" id="" class="form-control twenty_percent" style="margin-top: 4px;"  placeholder="Enter Amount"> -->
                  </div>
                    <!-- </div> -->

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
          net_worth.textContent = amount;
          var zakat_amount = 0;
          for (let index = 0; index < test.length; index++) {
            if(test[index].classList.contains('five_percent')){
            zakat_amount += Number(test[index].value)/100 * 5;
          }else if(test[index].classList.contains('ten_percent')){
            zakat_amount += Number(test[index].value)/100 * 10;
          }else if(test[index].classList.contains('twenty_percent')){
            zakat_amount += Number(test[index].value)/100 * 20;
          }else if(test[index].classList.contains('two_point_five_percent')){
            zakat_amount += Number(test[index].value)/100 * 2.5;
          }

          
          }
          
          zakat_payable.textContent = zakat_amount;
          // alert(net_amount)
          // alert(test[index].classList.contains('five_percent'))
        });

        
      }
    </script>