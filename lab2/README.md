# HTML Tables, Lists & Form Elements

## HTML Table

HTML tables allow web developers to arrange web application data into rows and columns.
The `<table>` tag defines an HTML table.
Each table row is defined with a `<tr>` tag. 
Each table header is defined with a `<th>` tag.
Each table data/cell is defined with a `<td>` tag.

> NOTE: The <td> elements are the data containers of the table. They can contain all sorts of HTML elements; text, images, lists, other tables, etc.

Example:

```
        <table>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
          </tr>
          <tr>
            <td>Shankhar</td>
            <td>Nepali</td>
            <td>50</td>
          </tr>
          <tr>
            <td>Rajkumar</td>
            <td>Paudel</td>
            <td>94</td>
          </tr>
        </table>
```

Above code will result like this:

| Firstname     | Lastname      | Age   |
| ------------- | ------------- | ----- |
| Shankhar      | Nepali        | 50    |
| Rajkumar      | Paudel        | 94    |


> Attributes rowspan and colspan can be used while designing a table
>> the colspan attribute to make a cell span many columns
>> Use the rowspan attribute to make a cell span many rows


## HTML Lists

HTML lists allow web developers to group a set of related items in lists.
There are two types of lists: Unordered List and Ordered List.

### Unordered List

An unordered list starts with the `<ul>` tag. Each list item starts with the `<li>` tag.
The list items will be marked with bullets (small black circles) by default.

Example:

```
<ul>
  <li>One</li>
  <li>Two</li>
  <li>Three</li>
  <li>Four</li>
  <li>Five</li>
</ul>
```

Above code will result like this:

+ One
+ Two
+ Three
+ Four
+ Five

> NOTE: We can use CSS 'list-style-type: <type>;' to define the style of the list item marker. It can have disc, circle or square.

### Ordered List

An ordered list starts with the `<ol>` tag. Each list item starts with the `<li>` tag.
The list items will be marked with numbers by default.

Example:

```
<ol>
  <li>One</li>
  <li>Two</li>
  <li>Three</li>
  <li>Four</li>
  <li>Five</li>
</ol>
```

Above code will result like this:

1. One
2. Two
3. Three
4. Four
5. Five

> NOTE: we can use attribute type="<type_name>" inside ol tag to define the type of the list item marker. eg: <ol type="I">

## HTML Form

An HTML form is used to collect user input. The user input is most often sent to a server for processing.
The HTML `<form>` element is used to create an HTML form for user input.

> NOTE: The <form> element is a container for different types of input elements, such as: text fields, checkboxes, radio buttons, submit buttons, etc.

Some of the form elements are:

### The `<input>` element

The HTML `<input>` element is the most used form element. 
An `<input>` element can be displayed in many ways, depending on the type attribute.
eg:
+ type="text"
+ type="password"
+ type="email"
+ type="radio"
+ type="checkbox"
+ type="submit"

### The `<label>` element

The `<label>` element defines a label for several form elements. 
It's useful for screen-reader users, because the screen-reader will read out loud the label when the user focus on the input element.
It also help users who have difficulty clicking on very small regions (such as radio buttons or checkboxes) - because when the user clicks the text within the `<label>` element, it toggles the radio button/checkbox.

### The `<select>` element

The `<select>` element defines a drop-down list.
The `<option>` elements defines an option that can be selected. By default, the first item in the drop-down list is selected.
To define a pre-selected option, add the selected attribute to the option. eg `<option value="" selected></option>`

### The `<textarea>` element

The `<textarea>` element defines a multi-line input field.

### The `<button>` element

The `<button>` element defines a clickable button.

> following is one simple example of html form

![HtmlForm](https://raw.githubusercontent.com/shivajichalise/webtechnology/main/screenshots/htmlform.png)

```
        <!DOCTYPE html>
        <html>
        <head>
          <style>
            #form-table{
              border-collapse: collapse;
              box-shadow: 5px 10px #888888;
              font-family: courier;
              background: #20B2AA;
            }

            #form-table td{
              padding: 10px;
            }
          </style>
        </head>
        <body>
        <form>
          <table border="1px" id="form-table">
              <tr>
                <td>Name:</td>
                <td><input type="text" name="name" placeholder="Name"></td>
              </tr>
              <tr>
                <td>Country:</td>
                  <td>
                    <select name="country" style="width:100%;">
                        <option>India</option>
                          <option>USA</option>
                          <option>UK</option>
                          <option value="nepal" selected>Nepal</option>
                          <option>China</option>
                      </select>
                  </td>
              </tr>
              <tr>
                <td>Address:</td>
                <td><input type="text" name="address" placeholder="Address"></td>
              </tr>
              <tr>
                <td>Contact</td>
                <td><input type="number" name="contact" placeholder="Contact"></td>
              </tr>
              <tr>
                <td colspan="2"><label>Male</label><input type="radio" name="gender"><label>Female</label><input type="radio" name="gender"></td>
              </tr>
              <tr>
                <td><label>Any Health Problems:</label></td>
                  <td>
                    <input type="checkbox"><label>Heart</label>
                    <input type="checkbox"><label>Kidney</label><br>
                    <input type="checkbox"><label>Liver</label>
                    <input type="checkbox"><label>Brain</label>
                  </td>
              </tr>
              <tr>
                <td>Submit:</td>
                <td><button type="button" name="submit" style="width:100%;">Submit</button></td>
              </tr>
          </table>
        </form>
        </body>
        </html>

```

### Landing Page

> Below shows the screenshot of simple landing page 

Find it live [here](http://www.yakeenkapali.com.np/landingpage.html)

![Landing Page](https://raw.githubusercontent.com/shivajichalise/webtechnology/main/screenshots/landingpage_paubha.png)
