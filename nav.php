<html>
<head>
    <meta charset="UTF-8">

<style>


.nav {
    display: block;
    font: 13px Helvetica, Tahoma, serif;
    text-transform: uppercase;
    margin: 0; 
    padding: 0;
}

.nav li {
    display: inline-block;
    list-style: none;
}

.nav .button-dropdown {
    position: relative;
}

.nav li a {
    display: block;
    color: #333;
    background-color: #fff;
    padding: 10px 20px;
    text-decoration: none;
}

.nav li a span {
    display: inline-block;
    margin-left: 5px;
    font-size: 10px;
    color: #999;
}

.nav li a:hover, .nav li a.dropdown-toggle.active {
    background-color: #289dcc;
    color: #fff;
}

.nav li a:hover span, .nav li a.dropdown-toggle.active span {
    color: #fff;
}

.nav li .dropdown-menu {
    display: none;
    position: absolute;
    left: 0;
    padding: 0;
    margin: 0;
    margin-top: 3px;
    text-align: left;
}

.nav li .dropdown-menu.active {
    display: block;
}

.nav li .dropdown-menu a {
    width: 150px;
}

</style>



</head>

<body>
<ul class="nav">
  <li class="button-dropdown">
    <a href="javascript:void(0)" class="dropdown-toggle">
      Dropdown 1 <span>▼</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="temp.php">
          Drop Item 1
        </a>
      </li>
      <li>
        <a href="temp.php">
          Drop Item 2
        </a>
      </li>
      <li>
        <a href="temp.php">
          Drop Item 3
        </a>
      </li>
    </ul>
  </li>
  
  
  
  
  
  <li class="button-dropdown">
    <a href="javascript:void(0)" class="dropdown-toggle">
      Dropdown 2 <span>▼</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="temp.php">
          Drop Item 1
        </a>
      </li>
      <li>
        <a href="temp.php">
          Drop Item 2
        </a>
      </li>
      <li>
        <a href="temp.php">
          Drop Item 3
        </a>
      </li>
    </ul>
  </li>
  
  
  
  <li class="button-dropdown">
    <a href="javascript:void(0)" class="dropdown-toggle">
      Dropdown 3 <span>▼</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="temp.php">
          Drop Item 1
        </a>
      </li>
      <li>
        <a href="temp.php">
          Drop Item 2
        </a>
      </li>
      <li>
        <a href="temp.php">
          Drop Item 3
        </a>
      </li>
    </ul>
  </li>
  
  
  <li class="button-dropdown">
    <a href="javascript:void(0)" class="dropdown-toggle">
      Dropdown 4 <span>▼</span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="temp.php">
          Drop Item 1
        </a>
      </li>
      <li>
        <a href="temp.php">
          Drop Item 2
        </a>
      </li>
      <li>
        <a href="temp.php">
          Drop Item 3
        </a>
      </li>
    </ul>
  </li>
  
  
</ul>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

</div>
</body>


<script>
jQuery(document).ready(function (e) {
    function t(t) {
        e(t).bind("click", function (t) {
            t.preventDefault();
            e(this).parent().fadeOut()
        })
    }
    e(".dropdown-toggle").click(function () {
        var t = e(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
        e(".button-dropdown .dropdown-menu").hide();
        e(".button-dropdown .dropdown-toggle").removeClass("active");
        if (t) {
            e(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(".button-dropdown").children(".dropdown-toggle").addClass("active")
        }
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-menu").hide();
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-toggle").removeClass("active");
    })
});
</script>


</html>