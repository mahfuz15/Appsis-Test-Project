# Appsis Test Project

<h3>Task Details</h3>
<p>There will be item list in database. Item may have sub item. Sub item may also have child.</p>

<h3>To Do</h3>
1. creating an item table. <br/>
2. Querying from the table. <br/>
3. Displying the item list. <br/>

<h3>Sample Output<h3>
<ul>
  <li>Item-1
    <ul>
      <li>Item-1.1</li>
      <li>Item-1.2</li>
      <li>Item-1.3
        <ul>
          <li>Item-1.3.1</li>
          <li>Item-1.3.2</li>
        </ul>
      </li>
      <li>Item-1.4</li>
    </ul>
  </li>
  <li>Item-2
    <ul>
      <li>Item-2.1</li>
      <li>Item-2.2
        <ul>
          <li>Item-2.2.1</li>
          <li>Item-2.2.2
            <ul>
              <li>Item-2.2.2.1
                <ul>
                  <li>Item-2.2.2.1.1</li>
                </ul>
              </li>
              <li>Item-2.2.2.2</li>
            </ul>
          </li>
          <li>Item-2.2.3</li>
        </ul>
      </li>
      <li>Item-2.3</li>
    </ul>
  </li>
</ul>

<h3>Stack</h3> 
1. Laravel v7.0 <br>
2. Bootstrap v5.0

<h3>Items Table</h3>
1. id - bigint(20) </br>
2. name - varchar(255), Required </br>
3. parent_id - int(11), Default(0)

<h3>Route</h3>
<table>
  <thead>
    <tr>
      <th>URL</th>
      <th>Method</th>
      <th>Controller</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>/</th>
      <td>GET</td>
      <td>ItemController</td>
      <td>index</td>
    </tr>
    <tr>
      <th>/create</th>
      <td>GET</td>
      <td>ItemController</td>
      <td>create</td>
    </tr>
    <tr>
      <th>/store</th>
      <td>POST</td>
      <td>ItemController</td>
      <td>store</td>
    </tr>
    <tr>
      <th>/edit/2</th>
      <td>GET</td>
      <td>ItemController</td>
      <td>edit</td>
    </tr>
    <tr>
      <th>/update/2</th>
      <td>PUT</td>
      <td>ItemController</td>
      <td>update</td>
    </tr>
    <tr>
      <th>/show/2</th>
      <td>GET</td>
      <td>ItemController</td>
      <td>show</td>
    </tr>
    <tr>
      <th>/delete</th>
      <td>DELETE</td>
      <td>ItemController</td>
      <td>destroy</td>
    </tr>
  </tbody>
</table>

<h3>Installaion</h3>
1. Clone the project from repository. <br>
2. Create database. <br>
3. Set database credentials into .env file. <br>
4. Run migration using <code>php artisan migrate</code> command. <br>
5. Seed the table using <code>php artisan db:seed</code> command (Optional). <br>
