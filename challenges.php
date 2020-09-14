<?php include("header.php"); ?>
<title>Donate</title>
<link rel="stylesheet" href="css/challenges.css">
<link rel="stylesheet" href="css/footer2.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/smooth-scrollbar.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/plugins/overscroll.js" type="text/javascript"></script>
</head>
<body>
<?php include('topbar.php');?>

    <div class="wrapper">
  <div class="scroll-list">
    <div class="scroll-list__wrp js-scroll-content js-scroll-list">
      <?php
        $query="Select * from ngo";
        $result = mysqli_query($conn, $query);
        $user = $_SESSION['user'];
        if($result){
        while($row = mysqli_fetch_assoc($result)) { ?>
          <div class="scroll-list__item js-scroll-list-item">
        <h6 style="text-align:center; font-weight:bold;"> <?= $row['name'] ?></h6><hr>
        <div class="row">
          <div class="col-md-8" style="overflow: hidden;">
            <p> Work Area : <?= $row['work'] ?> </p>
            <p> Location : <?= $row['location'] ?> </p>
          </div>
          <div class="col-md-4">
            <div class="center">
              <button type="button" class="btn btn-outline-primary btn-sm sb" data-toggle="modal" data-target="#exampleModal3"> Details</button>
              <a type="button" class="btn btn-outline-danger btn-sm sb mt-2" href="https://www.giveindia.org/certified-indian-ngos"> Donate </a> 
              <!-- <form action="complete.php" method="post" target="_blank">
                <input type="text" name="cid" value="<?php echo $row['cid']; ?>" hidden>
                <input class="btn btn-outline-success btn-sm sb" style="margin-top: 10px;" type="submit" value="Donate" readonly>
              </form> -->
              <!-- <a class="btn btn-info sb"> Donate <a> -->
            </div>
          </div>
        </div>
      </div>

    <?php }} ?>
    </div>
  </div>
</div>

<div class="modal" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> </button>
          <form class="" action="index.html" method="post">
            <div class="row">
            	<div class="col-sm-12">
              	<div class="form-group">
              <label for="recipient-name" class="form-control-label">Title</label>
              <input type="text" class="form-control" name="venue"  placeholder="Enter title" required>
            </div>
              </div>
              <div class="col-sm-12">
              	<div class="form-group">
              <label for="recipient-name" class="form-control-label">Description</label>
              <input type="text" class="form-control" name="city"  placeholder="Enter Description" required>
            </div>
              </div>
            </div>
            <div class="row">
            	<div class="col-sm-12">
              	<div class="form-group">
              <label for="recipient-name" class="form-control-label">Attach Files</label><br>
              <input type="file"  name="description"  placeholder="Attach files" required>
            </div>
              </div>
            </div>
            <button type="submit" class="btn btn-outline-primary" name="button"> submit </button>
          </form>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> </button>
        <p>Non-governmental organizations, or NGOs, were first called such in Article 71 in the Charter of the newly formed United Nations in 1945. While NGOs have no fixed or formal definition, they are generally defined as nonprofit entities independent of governmental influence (although they may receive government funding).

        </p><p>As one can tell from the basic definition above, the difference between nonprofit organizations (NPOs) and NGOs is slim. However, the term "NGO" is not typically applied to U.S.-based nonprofit organizations. Generally, the NGO label is given to organizations operating on an international level although some countries classify their own civil society groups as NGOs.</p>
      </div>
    </div>
  </div>
</div>




<script type="text/javascript">
$(document).ready(function () {
  var Scrollbar = window.Scrollbar;

  Scrollbar.use(window.OverscrollPlugin);

  var customScroll = Scrollbar.init(document.querySelector('.js-scroll-list'), {
    plugins: {
      overscroll: true
    }
  });

  var listItem = $('.js-scroll-list-item');

  listItem.eq(0).addClass('item-focus');
  listItem.eq(1).addClass('item-next');

  customScroll.addListener(function (status) {

    var $content = $('.js-scroll-content');

    var viewportScrollDistance = 0;


    viewportScrollDistance = status.offset.y;
    var viewportHeight = $content.height();
    var listHeight = 0;
    var $listItems = $content.find('.js-scroll-list-item');
    for (var i = 0; i < $listItems.length; i++) {
      listHeight += $($listItems[i]).height();
    }

    var top = status.offset.y;
    // console.log(top);
    var visibleCenterVertical = 0;
    visibleCenterVertical = top;

    var parentTop = 1;
    var $lis = $('.js-scroll-list-item');
    var $focusLi;
    for (var i = 0; i < $lis.length; i++) {
      var $li = $($lis[i]);
      var liTop = $li.position().top;
      var liRelTop = liTop - parentTop;

      var distance = 0;
      var distance = Math.abs(top - liRelTop);
      var maxDistance = $('.js-scroll-content').height() / 2;
      var distancePercent = distance / (maxDistance / 100);


      if (liRelTop + $li.parent().scrollTop() > top) {
        if (!$li.hasClass('item-focus')) {
          $li.prev().addClass('item-hide');
          $lis.removeClass('item-focus');
          $lis.removeClass('item-next');
        }
        $li.removeClass('item-hide');
        $li.addClass('item-focus');
        $li.next().addClass('item-next');
        break;
      }
    }
  });

});

</script>

<script type="text/javascript">
  $('#exampleModal3').on('show.bs.modal', function (event) {
    console.log("here");
    var button = $(event.relatedTarget)
    var description = button.data('des')
    var modal = $(this)
    modal.find('.modal-body').text = description;
  });

  $('#exampleModal4').on('show.bs.modal', function (event) {
    console.log("here");

  });
</script>


<?php include('footer2.php') ?>
