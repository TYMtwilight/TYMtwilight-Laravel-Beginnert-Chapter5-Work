<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Employees</title>
  </head>
  <body>
    <h1>Employees</h1>
    <form action="/databasework/public/employees/search" method="get">
      <input type="text" name="employee_name_like">
      <input type="submit" value="検索">
    </form>
    <table>
      <tr>
        <th>ID</th>
        <th>氏名</th>
        <th>基本給</th>
      </tr>
      @foreach($employees as $employee)
        <tr>
          <td>{{$employee -> id}}</td>
          <td>{{$employee -> employee_name}}</td>
          <td>{{$employee -> section}}</td>
          <td>{{$employee -> salary}}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>