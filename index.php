 <?php
 $kefu = ["9662589353","chaerxiaoer","9662589400","botset2021","9662589319","chaerdandan","9662589360","chaerxiaobao","9662589384","chaerdabao"];
 $sub = ["+63","0","@",""];
 $result = ["您找到的不是我们的客服，请谨慎交易！"];
 $content = @$_POST["content"];
 if(!empty($content)){
	 foreach($kefu as $key => $val){
		 $msg = "";
		 foreach($sub as $val2){
			 $content2 = $val2.$val;
			 if($content == $content2){
				if(is_numeric($content)){$msg="客服号：".$val." | 客服usename：@".$kefu[$key+1];}else{$msg="客服号：".$kefu[$key-1]." | 客服usename：@".$val;}
				 $result = [$msg];
				 break;
			 }
		 }
		 if(!empty($msg)){break;}
	 }
	 $result = json_encode($result);
	 echo $result;exit;
 }
?>
<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>查尔担保-官方验证通道</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link rel="stylesheet" href="/style/6300c9e.css" />
  <link rel="stylesheet" href="/style/dc006ef.css" />
  <link rel="stylesheet" href="/style/3b5f0be.css" />
 </head>
 <body>
  <div id="__nuxt">
   <div id="__layout">
    <section data-v-2f2582c2="" class="main"> 
     <section data-v-50bdbe1b="" data-v-2f2582c2="" class="inquiry-page">
      <div data-v-50bdbe1b="" class="inquiry-banner-web">
       <div data-v-50bdbe1b="">
        <div data-v-50bdbe1b="" class="inquiry-logo">
         <span data-v-50bdbe1b=""><b data-v-50bdbe1b="">查尔担保</b>官方验证通道</span>
        </div> 
        <div data-v-50bdbe1b="" class="tips">
         <i data-v-50bdbe1b=""></i>为防止不法分子借用查尔担保名义进行诈骗，您可通过此页面确认联系您的Telegram客服是否为查尔担保官方渠道。
        </div> 
        <div data-v-50bdbe1b="" class="inquiry-input">
         <input data-v-50bdbe1b="" class="content" type="text" placeholder="请输入完整的查询信息" /> 
         <button data-v-50bdbe1b="" onclick="huoqu()"><img data-v-50bdbe1b="" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiICB3aWR0aD0iMjAwcHgiIGhlaWdodD0iMjAwcHgiICB2aWV3Qm94PSIwIDAgMjAwIDIwMCIKIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgoubGVmdHtmaWxsOnVybCgjbGVmdCk7fQoucmlnaHR7ZmlsbDp1cmwoI3JpZ2h0KTt9Ci50b3B7ZmlsbDojN0E5OEY3O30KQGtleWZyYW1lcyBsb2FkewowJXt0cmFuc2Zvcm06cm90YXRlKDApfQoxMDAle3RyYW5zZm9ybTpyb3RhdGUoLTM2MGRlZyl9Cn0KI2xvYWR7YW5pbWF0aW9uOmxvYWQgMXMgIGxpbmVhciBpbmZpbml0ZTsgdHJhbnNmb3JtLW9yaWdpbjpjZW50ZXIgY2VudGVyOyB9Cjwvc3R5bGU+CjxnIGlkPSJsb2FkIj4KPGxpbmVhckdyYWRpZW50IGlkPSJyaWdodCIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIxNTAiIHkxPSIyMCIgeDI9IjE1MCIgeTI9IjE4MCI+CjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiM3QTk4RjciLz4KPHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzdBOThGNztzdG9wLW9wYWNpdHk6MC41Ii8+PCEtLeapmeWIsOa1heapmea4kOWPmC0tPgo8L2xpbmVhckdyYWRpZW50Pgo8cGF0aCBjbGFzcz0icmlnaHQiIGQ9Ik0xMDAsMHYyMGM0NC4xLDAsODAsMzUuOSw4MCw4MGMwLDQ0LjEtMzUuOSw4MC04MCw4MHYyMGM1NS4yLDAsMTAwLTQ0LjgsMTAwLTEwMFMxNTUuMiwwLDEwMCwweiIvPjwhLS3lj7PljYrlnIbnjq8tLT4KPGxpbmVhckdyYWRpZW50IGlkPSJsZWZ0IiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjUwIiB5MT0iMCIgeDI9IjUwIiB5Mj0iMTgwIj4KPHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6IzdBOThGNztzdG9wLW9wYWNpdHk6MCIvPgo8c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojN0E5OEY3O3N0b3Atb3BhY2l0eTowLjUiLz48IS0t5rWF5qmZ5Yiw55m96Imy5riQ5Y+YLS0+CjwvbGluZWFyR3JhZGllbnQ+CjxwYXRoIGNsYXNzPSJsZWZ0IiBkPSJNMjAsMTAwYzAtNDQuMSwzNS45LTgwLDgwLTgwVjBDNDQuOCwwLDAsNDQuOCwwLDEwMHM0NC44LDEwMCwxMDAsMTAwdi0yMEM1NS45LDE4MCwyMCwxNDQuMSwyMCwxMDB6Ii8+PCEtLeW3puWNiuWchueOry0tPgo8Y2lyY2xlIGNsYXNzPSJ0b3AiIGN4PSIxMDAiIGN5PSIxMCIgcj0iMTAiLz4KPC9nPgo8L3N2Zz4K" style="display: none;" /> <i data-v-50bdbe1b="" class="hb_icon_search"></i></button>
        </div>
       </div> 
       <img data-v-50bdbe1b="" src="/style/fc947aa.png" class="logo-web" />
      </div> 
      <div data-v-50bdbe1b="" class="inquiry-banner-h5">
       <div data-v-50bdbe1b="" class="inquiry-logo">
        <span data-v-50bdbe1b="">官方验证通道</span>
       </div> 
       <div data-v-50bdbe1b="" class="inquiry-input">
        <input data-v-50bdbe1b="" class="content" type="text" placeholder="请输入完整的查询信息" /> 
        <button data-v-50bdbe1b="" onclick="huoqu()"><img data-v-50bdbe1b="" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiICB3aWR0aD0iMjAwcHgiIGhlaWdodD0iMjAwcHgiICB2aWV3Qm94PSIwIDAgMjAwIDIwMCIKIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgoubGVmdHtmaWxsOnVybCgjbGVmdCk7fQoucmlnaHR7ZmlsbDp1cmwoI3JpZ2h0KTt9Ci50b3B7ZmlsbDojN0E5OEY3O30KQGtleWZyYW1lcyBsb2FkewowJXt0cmFuc2Zvcm06cm90YXRlKDApfQoxMDAle3RyYW5zZm9ybTpyb3RhdGUoLTM2MGRlZyl9Cn0KI2xvYWR7YW5pbWF0aW9uOmxvYWQgMXMgIGxpbmVhciBpbmZpbml0ZTsgdHJhbnNmb3JtLW9yaWdpbjpjZW50ZXIgY2VudGVyOyB9Cjwvc3R5bGU+CjxnIGlkPSJsb2FkIj4KPGxpbmVhckdyYWRpZW50IGlkPSJyaWdodCIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIxNTAiIHkxPSIyMCIgeDI9IjE1MCIgeTI9IjE4MCI+CjxzdG9wICBvZmZzZXQ9IjAiIHN0eWxlPSJzdG9wLWNvbG9yOiM3QTk4RjciLz4KPHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzdBOThGNztzdG9wLW9wYWNpdHk6MC41Ii8+PCEtLeapmeWIsOa1heapmea4kOWPmC0tPgo8L2xpbmVhckdyYWRpZW50Pgo8cGF0aCBjbGFzcz0icmlnaHQiIGQ9Ik0xMDAsMHYyMGM0NC4xLDAsODAsMzUuOSw4MCw4MGMwLDQ0LjEtMzUuOSw4MC04MCw4MHYyMGM1NS4yLDAsMTAwLTQ0LjgsMTAwLTEwMFMxNTUuMiwwLDEwMCwweiIvPjwhLS3lj7PljYrlnIbnjq8tLT4KPGxpbmVhckdyYWRpZW50IGlkPSJsZWZ0IiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjUwIiB5MT0iMCIgeDI9IjUwIiB5Mj0iMTgwIj4KPHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6IzdBOThGNztzdG9wLW9wYWNpdHk6MCIvPgo8c3RvcCAgb2Zmc2V0PSIxIiBzdHlsZT0ic3RvcC1jb2xvcjojN0E5OEY3O3N0b3Atb3BhY2l0eTowLjUiLz48IS0t5rWF5qmZ5Yiw55m96Imy5riQ5Y+YLS0+CjwvbGluZWFyR3JhZGllbnQ+CjxwYXRoIGNsYXNzPSJsZWZ0IiBkPSJNMjAsMTAwYzAtNDQuMSwzNS45LTgwLDgwLTgwVjBDNDQuOCwwLDAsNDQuOCwwLDEwMHM0NC44LDEwMCwxMDAsMTAwdi0yMEM1NS45LDE4MCwyMCwxNDQuMSwyMCwxMDB6Ii8+PCEtLeW3puWNiuWchueOry0tPgo8Y2lyY2xlIGNsYXNzPSJ0b3AiIGN4PSIxMDAiIGN5PSIxMCIgcj0iMTAiLz4KPC9nPgo8L3N2Zz4K" style="display: none;" /> <i data-v-50bdbe1b="" class="hb_icon_search"></i></button>
       </div> 
       <div data-v-50bdbe1b="" class="tips">
        <i data-v-50bdbe1b=""></i>为防止不法分子借用查尔担保名义进行诈骗，您可通过此页面确认联系您的Telegram客服是否为查尔担保官方渠道。
       </div>
      </div> 
      <div data-v-50bdbe1b="" class="line"></div> 
      <div data-v-50bdbe1b="" class="toast" style="display: none;">
       请输入需要查询的内容
      </div>
     </section> 
     <footer data-v-2f2582c2="" class="fedui-root fedui-footer-simple m_hide">
      <ul>
       <li><a href="/">首页</a></li> 
       <li><a rel="noopener noreferrer" target="_blank" href="https://t.me/d_5_150_1">查尔担保群</a></li> 
       <li><a rel="noopener noreferrer" target="_blank" href="https://t.me/d_5_150_2">查尔供应群</a></li> 
       <li><a target="_blank" href="https://t.me/p_5_151_1">查尔担保需求频道</a></li> 
      </ul> 
      <!---->
     </footer>
    </section>
   </div>
  </div>
  <script type="text/javascript">
var content = "";
//获取表单数据分批提交API查询
function huoqu() {
    content = $.trim($('.content').val());
    if ($.isEmptyObject(content)) {
        alert("输入值不能为空");
    } else {
        ajax();
    }
}
//ajax 抓取并展示
function ajax() {
  $.ajax({
      url: 'index.php',
      type: 'POST',
      data: {content:content},
      dataType: 'json',
      success: function (msg) {
        html = '';
        if ($.isEmptyObject(msg)) {
          alert("数据走失或不完整");
        } else {
		  alert(msg);
        }
      },
      error: function () {
        alert("系统程序错误");
      }
    });
}


</script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
 </body>
</html>