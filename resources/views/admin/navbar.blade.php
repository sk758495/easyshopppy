<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html" style="font-size: 12px">{{ Auth::user()->name }}</a>
    </div>
<div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
<form style="padding: 10px" method="POST" action="{{ route('admin.logout') }}">
@csrf

<input type="submit" style="background-color: transparent!important; border: none; box-shadow: none;"  value="logout">
</form>

            </div>
</nav>
