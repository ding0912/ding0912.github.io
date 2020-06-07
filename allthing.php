<html>

<h2><center>查詢失物</center></h2>
 <form action="all.php" method="post"  enctype="multipart/form-data">
<center>
請選擇物品類型:<select name="type">
  <option value="stationery" >文具類</option>
  <option value="wearing" >服飾類</option>
  <option value="3C">電子產品類</option>
  <option value="book">書本</option>
  <option value="withyou">隨身物品</option>
  <option value="other">其他物品</option>
 </select></br><br/>
請輸入物品顏色:<input type="text" name="color"><br/><br/>
請選擇地點：<select name="location">
  <option value="M01" >管理學院</option>
  <option value="H1" >人社院</option>
  <option value="L02">法學院</option>
  <option value="L01">圖書資訊大樓</option>
  <option value="K01">體健休大樓</option>
  <option value="C02">理學院</option>
  <option value="C01">工學院</option>
  <option value="B01">綜合大樓</option>
 </select></br><br/>
請選擇時間：<input type="date" name="t_forcatch"><br/>
 <input type="submit"><br/>

</center>





</html>