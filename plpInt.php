<!-- intasend - js intergration, mpesa & visa (mastercard) - secure payment gateway -->

<!-- Usage -->

<!-- SDK - intasend ->  <script src="https://unpkg.com/intasend-inlinejs-sdk@3.0.4/build/intasend-inline.js"></script> -->
<!--
public key
             js

new window.IntaSend({
        publicAPIKey: "ISPubKey_test_ee5f4860-80fb-4670-a8ef-3258658af886",
        live: false, //set to true when going live
      })
      // logic
      .on("COMPLETE", (results) =>
          console.log("Do something on success", results)
        )
        .on("FAILED", (results) =>
          console.log("Do something on failure", results)
        )
        .on("IN-PROGRESS", (results) =>
          console.log("Payment in progress status", results)
        );
 paybutton
 <button
            class="intaSendPayButton"
            data-amount="10"
            data-currency="KES"
          >
            Pay Now
          </button>
    -->
