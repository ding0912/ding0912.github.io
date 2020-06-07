<html>
<h2><center>新增掛失物</center></h2>
 <form action="manaddnew.php" method="post"  enctype="multipart/form-data">
<center>
請輸入物品名稱:<input type="text" name="Lname" required><br/><br/>
請選擇物品類型:<select name="type" required>
  <option value="stationery" >文具類</option>
  <option value="wearing" >服飾類</option>
  <option value="3C">電子產品類</option>
  <option value="book">書本</option>
  <option value="withyou">隨身物品</option>
  <option value="other">其他物品</option>
 </select></br><br/>
請輸入物品顏色:<input type="text" name="color" required><br/><br/>
Please input product photo address:<input type="file" name="picture[]"><br/>
請選擇遺失地點：<select name="location" required>
  <option value="M01" >管理學院</option>
  <option value="H1" >人社院</option>
  <option value="L02">法學院</option>
  <option value="L01">圖書資訊大樓</option>
  <option value="K01">體健休大樓</option>
  <option value="C02">理學院</option>
  <option value="C01">工學院</option>
  <option value="B01">綜合大樓</option>
 </select></br><br/>
 請選擇遺失時間<input type="date" name="t_forcatch" required><br/><br/>

 <input type="submit"><br/>

</center>





</html>