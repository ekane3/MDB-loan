<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>E-Commerce - MDBootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../../css/mdb.min.css" rel="stylesheet">
  <!-- Custom style cart-v1 -->
</head>

<body class="cart-v1 hidden-sn white-skin animated">

 <?php
  include('../../header.php');
 ?>

  <!-- Main Layout -->
  <main>

    <!-- Main Container -->
    <div class="container">

      <section class="section my-5 pb-5">

        <!-- Shopping Cart table -->
        <div class="table-responsive">

          <table class="table product-table table-cart-v-1">

            <!-- Table head -->
            <thead>

              <tr>

                <th></th>

                <th class="font-weight-bold">

                  <strong>Product</strong>

                </th>

                <th class="font-weight-bold">

                  <strong>Color</strong>

                </th>

                <th></th>

                <th class="font-weight-bold">

                  <strong>Price</strong>

                </th>

                <th class="font-weight-bold">

                  <strong>QTY</strong>

                </th>

                <th class="font-weight-bold">

                  <strong>Amount</strong>

                </th>

                <th></th>

              </tr>

            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>

              <!-- First row -->
              <tr>

                <th scope="row">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt=""
                    class="img-fluid z-depth-0">

                </th>

                <td>

                  <h5 class="mt-3">

                    <strong>iPhone</strong>

                  </h5>

                  <p class="text-muted">Apple</p>

                </td>

                <td>White</td>

                <td></td>

                <td>$800</td>

                <td class="text-center text-md-left">

                  <span class="qty">1 </span>

                  <div class="btn-group radio-group ml-2" data-toggle="buttons">

                    <label class="btn btn-sm btn-primary btn-rounded">

                      <input type="radio" name="options" id="option1">&mdash;

                    </label>

                    <label class="btn btn-sm btn-primary btn-rounded">

                      <input type="radio" name="options" id="option2">+

                    </label>

                  </div>

                </td>

                <td class="font-weight-bold">

                  <strong>$800</strong>

                </td>

                <td>

                  <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                    title="Remove item">X

                  </button>

                </td>

              </tr>
              <!-- First row -->

              <!-- Second row -->
              <tr>

                <th scope="row">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" alt=""
                    class="img-fluid z-depth-0">

                </th>

                <td>

                  <h5 class="mt-3">

                    <strong>Headphones</strong>

                  </h5>

                  <p class="text-muted">Sony</p>

                </td>

                <td>Red</td>

                <td></td>

                <td>$200</td>

                <td class="text-center text-md-left">

                  <span class="qty">3 </span>

                  <div class="btn-group radio-group ml-2" data-toggle="buttons">

                    <label class="btn btn-sm btn-primary btn-rounded">

                      <input type="radio" name="options" id="option1">&mdash;

                    </label>

                    <label class="btn btn-sm btn-primary btn-rounded">

                      <input type="radio" name="options" id="option2">+

                    </label>

                  </div>

                </td>

                <td class="font-weight-bold">

                  <strong>$600</strong>

                </td>

                <td>

                  <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                    title="Remove item">X

                  </button>

                </td>

              </tr>
              <!-- Second row -->

              <!-- Third row -->
              <tr>

                <th scope="row">

                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" alt=""
                    class="img-fluid z-depth-0">

                </th>

                <td>

                  <h5 class="mt-3">

                    <strong>iPad Pro</strong>

                  </h5>

                  <p class="text-muted">by FifeSteps</p>

                </td>

                <td>Gold</td>

                <td></td>

                <td>$600</td>

                <td class="text-center text-md-left">

                  <span class="qty">2 </span>

                  <div class="btn-group radio-group ml-2" data-toggle="buttons">

                    <label class="btn btn-sm btn-primary btn-rounded">

                      <input type="radio" name="options" id="option1">&mdash;

                    </label>

                    <label class="btn btn-sm btn-primary btn-rounded">

                      <input type="radio" name="options" id="option2">+

                    </label>

                  </div>

                </td>

                <td class="font-weight-bold">

                  <strong>$1200</strong>

                </td>

                <td>

                  <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                    title="Remove item">X

                  </button>

                </td>

              </tr>
              <!-- Third row -->

              <!-- Fourth row -->
              <tr>

                <td colspan="3"></td>

                <td>

                  <h4 class="mt-2">

                    <strong>Total</strong>

                  </h4>

                </td>

                <td class="text-right">

                  <h4 class="mt-2">

                    <strong>$2600</strong>

                  </h4>

                </td>

                <td colspan="3" class="text-right">

                  <button type="button" class="btn btn-primary btn-rounded">Complete purchase

                    <i class="fas fa-angle-right right"></i>

                  </button>

                </td>

              </tr>
              <!-- Fourth row -->

            </tbody>
            <!-- Table body -->

          </table>

        </div>
        <!-- Shopping Cart table -->

      </section>

    </div>
    <!-- Main Container -->

  </main>
  <!-- Main Layout -->

 
  <?php
    include('footer.php');
  ?>

  <!-- Cart Modal -->
  <div class="modal fade cart-modal" id="cart-modal-ex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <div class="modal-dialog" role="document">

      <!-- Content -->
      <div class="modal-content">

        <!-- Header -->
        <div class="modal-header">

          <h4 class="modal-title font-weight-bold dark-grey-text" id="myModalLabel">Your cart</h4>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <!-- Body -->
        <div class="modal-body">

          <table class="table table-hover">

            <thead>

              <tr>

                <th>#</th>

                <th>Product name</th>

                <th>Price</th>

                <th>Remove</th>

              </tr>

            </thead>

            <tbody>

              <tr>

                <th scope="row">1</th>

                <td>Product 1</td>

                <td>100$</td>

                <td>

                  <a>

                    <i class="fas fa-eraser"></i>

                  </a>

                </td>

              </tr>

              <tr>

                <th scope="row">2</th>

                <td>Product 2</td>

                <td>100$</td>

                <td>

                  <a>

                    <i class="fas fa-eraser"></i>

                  </a>

                </td>

              </tr>

              <tr>

                <th scope="row">3</th>

                <td>Product 3</td>

                <td>100$</td>

                <td>

                  <a>

                    <i class="fas fa-eraser"></i>

                  </a>

                </td>

              </tr>

              <tr>

                <th scope="row">4</th>

                <td>Product 4</td>

                <td>100$</td>

                <td>

                  <a>

                    <i class="fas fa-eraser"></i>

                  </a>

                </td>

              </tr>

            </tbody>

          </table>

          <button class="btn btn-primary btn-rounded btn-sm">Checkout</button>

        </div>

        <!-- Footer -->
        <div class="modal-footer">

          <button type="button" class="btn blue darken-3 btn-rounded btn-sm" data-dismiss="modal">Close</button>

        </div>

      </div>
      <!-- Content -->

    </div>

  </div>
  <!-- Cart Modal -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../../js/mdb.min.js"></script>
  <script type="text/javascript">
    /* WOW.js init */
    new WOW().init();

    // MDB Lightbox Init
    $(function () {

      $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });

    // Tooltips Initialization
    $(function () {

      $('[data-toggle="tooltip"]').tooltip()
    })

    // SideNav Initialization
    $(".button-collapse").sideNav();

    // Material Select Initialization
    $(document).ready(function () {

      $('.mdb-select').material_select();
    });

  </script>

</body>

</html>
