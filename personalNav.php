<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>personalNav</title>
</head>
<body>
      <!-- 左侧导航 -->
   
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
            <!-- 投资项目 -->
             <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                       投资项目
                         </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body"><li><a href="#">投资项目</a></li></div>
    </div>
  </div>
  <!-- 借款项目 -->
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          借款项目
          </a>
         </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
          <li><a href="borrow_apply.php">申请借款</a></li>
          <li><a href="borrow_list.php">借款项目</a></li>
          <li><a href="#">还款明细</a></li>
          <li><a href="borrow_Statistics.php">借款项目总计</a></li>
          </div>
        </div>
  </div>
  <!-- 我的账户 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         我的账户</a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <li><a href="account.php">账户信息</a></li>
        <li><a href="realAuth.php">实名认证</a></li>
        <li><a href="recharge.php">银行卡管理</a></li>
        <li><a href="login_list.php">登录记录</a></li>
      </div>
    </div>
  </div>
  <!-- 资产详情 -->
  <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                       资产详情</a>
                    </h4>
                </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
        <div class="panel-body">
        <li><a href="#">账户流水</a></li>
        <li><a href="#">充值明细</a></li>
        <li><a href="#">提现记录</a></li>
        <li><a href="#">收款明细</a></li>
      </div>
    </div>
  </div>
  <!-- 个人资料 -->
  <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                     个人资料
                         </a>
                    </h4>
                </div>
            <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive">
        <div class="panel-body">
        <li><a href="personal.php">个人资料</a></li>
       
      </div>
    </div>

</body>
</html>