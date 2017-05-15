<!DOCTYPE html>
<html>
<head>
	<title></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full Slider - Start Bootstrap Template</title>
    <!-- <script src="js/jquery.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- Bootstrap Core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}

    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/full-slider.css') }}
    <!-- Custom CSS -->
    <!-- <link href="css/full-slider.css" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	.containerpadding{
    		padding-top: 120px;
    	}
    	hr{
    		size: 10px;
    	}
    	h6{
    		margin-left: 20px;
    	}
    	h4{
    		margin-bottom: 15px;
    	}h3{
    		font-weight: bold;
    	}
    	.tes{
    		 display: inline-block;
    	}

		.card {
		    /* Add shadows to create the "card" effect */
		    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		    transition: 0.3s;
		    width: 200px;
		    display: inline-block;
		    margin-right: 40px;
		      margin-bottom: 40px;

		}

		/* On mouse-over, add a deeper shadow */
		.card:hover {
		    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		/* Add some padding inside the card container */
		.container {
		    padding: 2px 16px;
		}
		.star-rating {
		  line-height:32px;
		  font-size:1.25em;
		}

		.star-rating .fa-star{color: yellow;}
		#colorstar { color: #ee8b2d;}
		.badForm {color: #FF0000;}
		.goodForm {color: #00FF00;}
		.evaluation { margin-left:30px;}

    </style>

</head>
<body>
   <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top"  role="navigation">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class=" " href="#">   <img src={{asset('storage/vlogo.png')}} alt='error'> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">What We Do</a>
                    </li>
                    <li>
                        <a href="#">Activity</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

        <div class="container navbar-inverse" style="width:100%" >

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-1"></div>
    <div class="col-md-8"><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav center">
            <li>
                <a href="#">New</a>
            </li>
            <li>
                <a href="#">Bestseller</a>
            </li>
            <li>
                <a href="#">Living Room</a>
            </li>
            <li>
                <a href="#">Bed Room</a>
            </li>
            <li>
                <a href="#">Dining Room</a>
            </li>
            <li>
                <a href="#">Business Space</a>
            </li>
            <li>
                <a href="#">Kitchen</a>
            </li>
            <li>
                <a href="#">Interior Design</a>
            </li>
            <li>
                <a href="#">Construction</a>
            </li>
        </ul>
    </div></div>
  </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="continer">
    	<div class="containerpadding" >
    		  <div class="row">
    	<div class="col-sm-1"></div>
    	<div class="col-sm-3 " style="margin-top: 35px;">
    	 <nav class="navbar navbar-default navbar-fixed-side" style="width: 300px;">
    	 <div style="margin-left: 15px;">
    	 	<left>
			<b><H3>SOFA</H3></b>
			<hr>
	      <h4><a href="#">Sofa</a></h4>
	      <h4><a href="#">Chair</a></h4>
	      <h4><a href="#">Table</a></h4><br>
	      <hr>
	      <h3>Harga</h3>
	      <hr>
	      <div class="tes">
	      	<div style="width: 120px; display: inline-block;" >

	      		<div class="input-group input-group-sm">
				  <span class="input-group-addon" id="sizing-addon3">Rp.</span>
				  <input type="text" class="form-control" placeholder="min" aria-describedby="sizing-addon3">
				</div>

	      </div>
	      <label class="connector">ke</label>
	      <div style="width: 120px; display: inline-block;">
	      <div class="input-group input-group-sm">
				  <span class="input-group-addon" id="sizing-addon3">Rp.</span>
				  <input type="text" class="form-control" placeholder="max" aria-describedby="sizing-addon3">
				</div>
	      </div>
	      </div>
	      <br>
	      <hr>

	      </left>

    	 </div>

	      </nav>

	    </div>
	    <div class="col-sm-6 ">
	      <h2>Sofa</h2>
	   	  <div style="width:780px; height:2px; background-color:black;"></div>
	   	  <br>
	   	 <!-- Split button -->
<div class="btn-group">
  <button type="button" class="btn btn-default btn-xs">Sort By</button>
  <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Harga Termurah</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Harga Termahal</a></li>

    <li role="separator" class="divider"></li>
    <li><a href="#">Rating</a></li>
  </ul>
</div>
			<br>
	<br>
	<?php for ($i=1; $i < 10; $i++) {?>

 		<div class="card">
		   	   <center>
		   	   	<img src={{asset('storage/chair2.jpg')}} height=150px width="150px" alt='error'>
				  <div >
				    <h4><b>John Doe</b></h4>
				    <p>Architect & Engineer</p>
				    <p>Rp.1.600.000</p>
				      <img src="{{asset('storage/star.jpg')}}">

		   	   </center>
			  </div>

			<?php} ?>
			 <?php if($i%3==0) {?><br>
			 <?php }
			 }?>

			</div>



	   	  </div>
	   	  </div>








    </div>
    </div>
     <footer >
            <div class="row">
                <div class="col-lg-10">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>


</body>
<script type="text/javascript">
	// Starrr plugin (https://github.com/dobtco/starrr)
var __slice = [].slice;

(function($, window) {
  var Starrr;

  Starrr = (function() {
    Starrr.prototype.defaults = {
      rating: void 0,
      numStars: 5,
      change: function(e, value) {}
    };

    function Starrr($el, options) {
      var i, _, _ref,
        _this = this;

      this.options = $.extend({}, this.defaults, options);
      this.$el = $el;
      _ref = this.defaults;
      for (i in _ref) {
        _ = _ref[i];
        if (this.$el.data(i) != null) {
          this.options[i] = this.$el.data(i);
        }
      }
      this.createStars();
      this.syncRating();
      this.$el.on('mouseover.starrr', 'span', function(e) {
        return _this.syncRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('mouseout.starrr', function() {
        return _this.syncRating();
      });
      this.$el.on('click.starrr', 'span', function(e) {
        return _this.setRating(_this.$el.find('span').index(e.currentTarget) + 1);
      });
      this.$el.on('starrr:change', this.options.change);
    }

    Starrr.prototype.createStars = function() {
      var _i, _ref, _results;

      _results = [];
      for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
        _results.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"));
      }
      return _results;
    };

    Starrr.prototype.setRating = function(rating) {
      if (this.options.rating === rating) {
        rating = void 0;
      }
      this.options.rating = rating;
      this.syncRating();
      return this.$el.trigger('starrr:change', rating);
    };

    Starrr.prototype.syncRating = function(rating) {
      var i, _i, _j, _ref;

      rating || (rating = this.options.rating);
      if (rating) {
        for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star-empty').addClass('glyphicon-star');
        }
      }
      if (rating && rating < 5) {
        for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
          this.$el.find('span').eq(i).removeClass('glyphicon-star').addClass('glyphicon-star-empty');
        }
      }
      if (!rating) {
        return this.$el.find('span').removeClass('glyphicon-star').addClass('glyphicon-star-empty');
      }
    };

    return Starrr;

  })();
  return $.fn.extend({
    starrr: function() {
      var args, option;

      option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      return this.each(function() {
        var data;

        data = $(this).data('star-rating');
        if (!data) {
          $(this).data('star-rating', (data = new Starrr($(this), option)));
        }
        if (typeof option === 'string') {
          return data[option].apply(data, args);
        }
      });
    }
  });
})(window.jQuery, window);

$(function() {
  return $(".starrr").starrr();
});

$( document ).ready(function() {

    var correspondence=["","Really Bad","Bad","Fair","Good","Excelent"];

  $('.ratable').on('starrr:change', function(e, value){

     $(this).closest('.evaluation').children('#count').html(value);
     $(this).closest('.evaluation').children('#meaning').html(correspondence[value]);

     var currentval=  $(this).closest('.evaluation').children('#count').html();

    var target=  $(this).closest('.evaluation').children('.indicators');
    target.css("color","black");
    target.children('.rateval').val(currentval);
    target.children('#textwr').html(' ');


    if(value<3){
     target.css("color","red").show();
     target.children('#textwr').text('What can be improved?');
    }else{
        if(value>3){
            target.css("color","green").show();
            target.children('#textwr').html('What was done correctly?');
        }else{
       target.hide();
        }
    }

  });





  $('#hearts-existing').on('starrr:change', function(e, value){
    $('#count-existing').html(value);
  });
});





$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'fa fa-square-o'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});


</script>
</html>
