<style>
#menu_above {
    background: #f1f1f1;
    height: 40px;
    padding: 1px;
    font-family: sans-serif;
    border-radius: 10px;
}

#search-bar
    input[type="text"] {
        width: 363px;
        padding: 13px 15px;
        margin: -5px -1px;
        float: left;
        border-radius: 10px;
        border-style: none;
        border: 2px solid black;
        float: left;
}

#menu_above ul {
    margin: auto;
}

#menu_above ul li {
    list-style: none;
    float: right;
}

#menu_above ul li a {
    text-decoration: none;
    display: block;
    line-height: 0px;
    color: #000000;
    padding: 20px 15px 20px 15px;
    text-transform: uppercase;
}

#menu_above ul li a:hover {
    color: orange;
}

</style>

<div id = "menu_above">
            <ul>
                <li><a href="#" title="Log in">Log In</a></li>
                <li><a href="#" title="Register">Register</a></li>
                <li><a href="cart.php" title="Cart">Cart</a></li>
            </ul>
</div>
<div id ="search-bar">
                    <form>
                        <input type="text"name="search" placeholder="Find something...">  
                    </form>
                </div>

