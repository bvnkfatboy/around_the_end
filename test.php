<style>

.column {
  float: left;
  width: 20%;
  padding: 0 15px;
}

.row {margin: 0;}


.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 900px) {
  .column {
    width: 50%;

  }
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}


.product_cards {

  padding: 16px;
  text-align: center;


}

.product_cards p {
    
    font-size: 14px;
    word-wrap: break-word;
}


.product_cards img {
  display:block;
  width:100%;
  margin-left:auto;
  margin-right:auto;
}
.product_name{
    height: 25px;
    width: 100%;
}

</style>


<div class="row">

  <div class="column">
    <div class="product_cards">
        <img  width="336px" src="dist/img/product/1.jpg">
        <div class="product_name"><p class="product_text">Some text</p></div>
    </div>
  </div>

</div>
