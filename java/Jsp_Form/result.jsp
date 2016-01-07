<%@ page contentType="text/html; charset=UTF-8" %>
<html>
<body>
  <h2>送信結果</h2>
  <p>名前: <%= request.getParameter("name") %></p>
  <p>メッセージ: <%= request.getParameter("message") %></p>
</body>
</html>
