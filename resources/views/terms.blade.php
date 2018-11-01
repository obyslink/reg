@include('includes.header')

<div class="jumbotron">
  <h1 class="display-3">The Swap Africa!</h1>
  <p class="lead"> Terms and Conditions</p>
 
</div>

<div class="container">

<!-- <div class="row">

      <div class="container">
            <div class="clearfix"> <span style="float:right">
                <p>Upload passport</p>
                <p><input type="file"  accept="image/*" name="image" id="file"  onchange="readURL(this);" />
                <img id="blah" src="css/" alt="your image" /></p>
                </span> 
      </div>

</div> -->

<a href=" {{ url('/') }}" class="button button-white">Go Back</a>

<div class="col-xl-8 offset-xl-2 py-5">
    <h4>
        This AGREEMENT  is made this 11th day of September, 2018
    </h4>

    <div style="margin-bottom: 30px;"></div>
    

    <p >Please click to view and download the Contract below.</p>
    <input type="submit" onclick="location.href='{{ asset('9StreamContract.pdf') }}';"  class="btn btn-warning btn-send" value="DOWNLOAD">

   
   

    </div>
    <!-- /.8 -->

</div>
<!-- /.row-->

</div>

@include('includes.footer')