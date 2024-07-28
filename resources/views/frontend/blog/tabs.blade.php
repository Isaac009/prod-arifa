@extends('frontend.layout.app')
<style>
    /* Basic styling for the tabbed interface */
    /* .tab {
        display: inline-block;
        padding: 10px 20px;
        margin-right: 10px;
        background-color: #f1f1f1;
        cursor: pointer;
    }

    .tab.active {
        background-color: #ccc;
        font-weight: bold;
    }

    .tab-content {
        display: none;
        padding: 20px;
        border-top: 1px solid #ccc;
    }

    .tab-content.active {
        display: block;
    } */

    .content{
        width: 450px;
        height: auto;
        margin: 0 auto;
        padding: 30px;
        }
        .nav-pills{
        width: 450px;
        }
        .nav-item{
        width: 50%;
        }
        .nav-pills .nav-link{
        font-weight: bold;
        padding-top: 13px;
        text-align: center;
        background: #343436;
        color: #fff;
        border-radius: 30px;
        height: 100px;
        }
        .nav-pills .nav-link.active{
        background: #fff;
        color: #000;
        }
        .tab-content{
        position: absolute;
        width: 450px;
        height: auto;
        margin-top: -50px;
        background: #fff;
        color: #000;
        border-radius: 30px;
        z-index: 1000;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.4);
        padding: 30px;
        margin-bottom: 50px;
        }
        .tab-content button{
        border-radius: 15px;
        width: 100px;
        margin: 0 auto;
        float: right;
        }
</style>
@section('main-content')


    <!--
    =============================================
        Theme Inner Banner
    ==============================================
    -->
    <div class="theme-inner-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <h2>Blog</h2>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->

    <div class="content">
        <!-- Nav pills -->
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#regis">Register</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div id="login" class="container tab-pane active">
            <form>
              <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control is-valid" id="exampleFormControlInput1" placeholder="name@example.com">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control is-invalid" id="exampleInputPassword1" placeholder="Password">
                <small id="emailHelp" class="form-text text-muted">Password incorrect.</small>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div id="regis" class="container tab-pane fade">
            <form>
              <div class="form-group">
                <label for="InputName">Full Name</label>
                <input type="text" class="form-control is-valid" id="InputName" placeholder="Full Name">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="InputUsername">Username</label>
                <input type="text" class="form-control is-valid" id="InputUsername" placeholder="Username">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput2">Email address</label>
                <input type="email" class="form-control is-valid" id="exampleFormControlInput2" placeholder="name@example.com">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword2">Password</label>
                <input type="password" class="form-control is-invalid" id="exampleInputPassword2" placeholder="Password">
                <small id="emailHelp" class="form-text text-muted">Password incorrect.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPasswordVer">Verify Password</label>
                <input type="password" class="form-control is-invalid" id="exampleInputPasswordVer" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>

    <!--
    =============================================
        Our Blog
    ==============================================
    -->
    <div id="tabs">
        <div class="tab active" data-tab="tab1">Board of Directors</div>
        <div class="tab" data-tab="tab2">Leadership</div>
        <div class="tab" data-tab="tab3">Staff</div>
        <div class="tab" data-tab="tab3">Researchers</div>
    </div>

    <div id="tab-contents">
        <div class="tab-content active" id="tab1">
            <h2>Content for Tab 1</h2>
            <p>This is the content for Tab 1.</p>
        </div>
        <div class="tab-content" id="tab2">
            <h2>Content for Tab 2</h2>
            <p>This is the content for Tab 2.</p>
        </div>
        <div class="tab-content" id="tab3">
            <h2>Content for Tab 3</h2>
            <p>This is the content for Tab 3.</p>
        </div>
    </div>
@endsection
@push('additional-scripts')
<script>
    // JavaScript to handle tab switching
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                // Remove active class from all tabs and tab contents
                tabs.forEach(tab => tab.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));

                // Add active class to the clicked tab and corresponding tab content
                tab.classList.add('active');
                document.getElementById(tab.getAttribute('data-tab')).classList.add('active');
            });
        });
    });
</script>
@endpush
