<body oncontextmenu="return false" class="snippet-body">
    <div
      class="d-flex justify-content-center align-items-center container px-2"
    >
      <div class="card">
        <div class="top d-flex flex-row align-items-center">
          <h6 class="mb-0 mr-2">Stk push vannila js👋</h6>
        </div>
        <div class="middle">
          <img src="./product.png" width="150" class="mt-3" />
          <h5>Pineapple Green Packham</h5>
          <span>Each - approx 1.2KG</span>
        </div>
        <div class="bottom d-flex flex-row justify-content-center">
          <div class="input-group mb-3">
            <span class="input-group-text">+</span>
            <input type="text" class="form-control" value="1" />
            <span class="input-group-text">-</span>
          </div>
          <br>
          <br>
          <button
            class="intaSendPayButton"
            data-amount="10"
            data-currency="KES"
          >
            Pay Now
          </button>
        </div>
      </div>
    </div>
    <script>
      new window.IntaSend({
        publicAPIKey: "ISPubKey_test_ee5f4860-80fb-4670-a8ef-3258658af886",
        live: false, //set to true when going live
      })
        .on("COMPLETE", (results) =>
          console.log("Do something on success", results)
        )
        .on("FAILED", (results) =>
          console.log("Do something on failure", results)
        )
        .on("IN-PROGRESS", (results) =>
          console.log("Payment in progress status", results)
        );
    </script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"
    ></script>
  </body>
  