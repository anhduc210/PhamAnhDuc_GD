<?php 
//load file Layout.php vao day
$this->fileLayout = "LayoutTrangTrong.php";
?>
<!-- CONTENT -->
<div class="prd-detail container-fluid">
  <input type="hidden" id="is-page-product-detail" value="1">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 hidden-xs hidden-sm">
      <ol class="breadcrumb">
        <li><a href="#"><?php 
                $category = $this->modelGetCategory($record->category_id);
                echo isset($category->name) ? $category->name : "";
             ?></a></li>
        <li><a href="#"><?php 
                $category = $this->modelGetCategory($record->category_line);
                echo isset($category->name) ? $category->name : "";
             ?></a></li>

        <li class="active"><?php echo $record->name; ?></li>
      </ol>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
      <div class="wrapper-slide">
        <div class="prd-detail-main-img">
          <img class="main-img" src="assets/upload/products/<?php echo $record->photo; ?>">
          <img id="zoom" class="zoom-img hidden-xs hidden-sm">
        </div>
        <div class="prd-detail-slide1">
          <div class="thumbnail">
            <div class="cont-item"><img src="assets/upload/products/<?php echo $record->photo; ?>"
              data-img-normal="assets/upload/products/<?php echo $record->photo; ?>"
              data-img-large="assets/upload/products/<?php echo $record->photo; ?>"></div>
            </div>
            <div class="thumbnail">
              <div class="cont-item"><img src="assets/upload/products/<?php echo $record->photo2; ?>"
                data-img-normal="assets/upload/products/<?php echo $record->photo2; ?>"
                data-img-large="assets/upload/products/<?php echo $record->photo2; ?>"></div>
              </div>
              <div class="thumbnail">
                <div class="cont-item"><img src="assets/upload/products/<?php echo $record->photo3; ?>"
                  data-img-normal="assets/upload/products/<?php echo $record->photo3; ?>"
                  data-img-large="assets/upload/products/<?php echo $record->photo3; ?>"></div>
                </div>
                <div class="thumbnail">
                  <div class="cont-item"><img src="assets/upload/products/<?php echo $record->photo4; ?>"
                    data-img-normal="assets/upload/products/<?php echo $record->photo4; ?>"
                    data-img-large="assets/upload/products/<?php echo $record->photo4; ?>"></div>
                  </div>
                  </div>
                  </div>

                  <div class="row prd-detail-img hidden-xs hidden-sm">

                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 prd-detail-right">
                  <h4><?php echo $record->name; ?></h4>
                  <h6 class="detail1">
                    <input type="hidden" id="productId" value="430236">
                    <span class="pull-left">Tr???ng th??i:  <strong> <?php 
                $category = $this->modelGetCategory($record->category_status);
                echo isset($category->name) ? $category->name : "";
             ?></strong></span>

                  </h6>
                  <h5 class="detail1">
                    <span class="saleprice"><?php echo number_format($record->price - ($record->price * $record->discount)/100); ?> VND</span>
                    <span class="realprice">
                      <?php 
                        if ($record->discount ==0) {
                          
                        }else{
                          echo number_format($record->price);
                          echo("VN??");
                        }

                         ?>
                    </span>
                  </h5>
                  <div class="divider"></div>
                  <h6 class="detail1"><?php echo($record->description); ?></h6>
                    <div class="divider"></div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5>SIZE</h5>
                        <select id="pickSize" class="selectpicker" data-style="btn" data-action="wp-admin/admin-ajax.php" data-productID="430236">
                          <option selected>&nbsp;</option>
                          <option >35</option>
                          <option >36</option>
                          <option >37</option>
                          <option >38</option>
                          <option >39</option>
                          <option >40</option>
                          <option >41</option>
                          <option >42</option>
                          <option >43</option>
                          <option >44</option>
                          <option >45</option>
                          <option >46</option>
                        </select>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <h5>S??? L?????NG</h5>
                        <select id="pickQuantity"  class="selectpicker quantity" data-style="btn">
                          <option selected >&nbsp;</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                      </div>
                    </div>
                    <div class="row grp-btn1">
                      <a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" class="btn btn-addcart" id="addProductToCart" data-ananas-validations>TH??M V??O GI??? H??NG</a>
                      <a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" data-idProduct="430236"
                      class="btn btn-like addToWishList"
                      data-isProductListPage="0"
                      data-liked="false"
                      data-action="transferCartToWishList"
                      data-img = "./document/wp-content/themes/ananas/fe-assets/images/svg/Heart_product_1.svg"
                      data-img-like="./document/wp-content/themes/ananas/fe-assets/images/svg/Heart_product_2.svg ?" data-img-unlike="./document/wp-content/themes/ananas/fe-assets/images/svg/Heart_product_1.svg"
                      >
                      <img id="image-heart" src="./document/wp-content/themes/ananas/fe-assets/images/svg/Heart_product_1.svg"></a>
                    </div>
                    <div class="row">
                      <a href="index.php?controller=cart&action=create&id=<?php echo $record->id; ?>" id="pickOrder" data-ananas-validations class="btn btn-checkout">THANH TO??N</a>
                      <input type="hidden" id="_wpnonce" name="_wpnonce" value="da2239d6a2" /><input type="hidden" name="_wp_http_referer" value="product-detail/av00011/" />            </div>
                      <div class="row info-validate empty-error" style="display: none;">
                        Vui l??ng ch???n Size/S??? l?????ng ph?? h???p
                      </div>
                      <div>
                        <div class="panel-group" id="prdDetailInfor" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#prdDetailInfor"
                                href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                TH??NG TIN S???N PH???M <span class="caret"></span>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                          aria-labelledby="headingOne">
                          <div class="divider-1"></div>
                          <div class="panel-body">
                            <h6><p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;- Gender: Unisex\n- Size run: 35 - 46\n- Upper: Canvas NE\n- Outsole: Rubber&quot;}" data-sheets-userformat="{&quot;2&quot;:13245,&quot;3&quot;:{&quot;1&quot;:0},&quot;5&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;7&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;10&quot;:1,&quot;11&quot;:4,&quot;12&quot;:0,&quot;15&quot;:&quot;Arial&quot;,&quot;16&quot;:14}">Gender: Unisex<br />
                              Size run: 35 &#8211; 46<br />
                              Upper: Canvas NE<br />
                            Outsole: Rubber</span></p>
                            <p><img class="alignnone size-full wp-image-6905" src="./document/wp-content/uploads/Size-chart-1-e1559209680920.jpg" alt="" width="500" height="358" /></p>
                          </h6>
                        </div>
                      </div>
                      <div class="divider-1"></div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse"
                          data-parent="#prdDetailInfor"
                          href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          QUY ?????NH ?????I S???N PH???M <span class="caret"></span>
                        </a>

                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                    aria-labelledby="headingTwo">
                    <div class="divider-1"></div>
                    <div class="panel-body">
                      <h6><ul>
                        <li>Ch??? ?????i h??ng 1 l???n duy nh???t, mong b???n c??n nh???c k?? tr?????c khi quy???t ?????nh.</li>
                        <li>Th???i h???n ?????i s???n ph???m khi mua tr???c ti???p t???i c???a h??ng l?? 07 ng??y, k??? t??? ng??y mua. ?????i s???n ph???m khi mua online l?? 14 ng??y, k??? t??? ng??y nh???n h??ng.</li>
                        <li>S???n ph???m ?????i ph???i k??m h??a ????n. B???t bu???c ph???i c??n nguy??n tem, h???p, nh??n m??c.</li>
                        <li>S???n ph???m ?????i kh??ng c?? d???u hi???u ???? qua s??? d???ng, kh??ng gi???t t???y, b??m b???n, bi???n d???ng.</li>
                        <li>Ananas ch??? ??u ti??n h??? tr??? ?????i size. Trong tr?????ng h???p s???n ph???m h???t size c???n ?????i, b???n c?? th??? ?????i sang 01 s???n ph???m kh??c:<br />
                          - N???u s???n ph???m mu???n ?????i ngang gi?? tr??? ho???c c?? gi?? tr??? cao h??n, b???n s??? c???n b?? kho???ng ch??nh l???ch t???i th???i ??i???m ?????i (n???u c??).<br />
                        - N???u b???n mong mu???n ?????i s???n ph???m c?? gi?? tr??? th???p h??n, ch??ng t??i s??? kh??ng ho??n l???i ti???n.</li>
                        <li>Trong tr?????ng h???p s???n ph???m - size b???n mu???n ?????i kh??ng c??n h??ng trong h??? th???ng. Vui l??ng ch???n s???n ph???m kh??c.</li>
                        <li>Kh??ng ho??n tr??? b???ng ti???n m???t d?? b???t c??? trong tr?????ng h???p n??o. Mong b???n th??ng c???m.</li>
                      </ul>
                    </h6>
                  </div>
                </div>
                <div class="divider-1"></div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse"
                    data-parent="#prdDetailInfor"
                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    B???O H??NH TH??? N??O ? <span class="caret"></span>
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
              aria-labelledby="headingThree">
              <div class="divider-1"></div>
              <div class="panel-body">
                <h6><p>M???i ????i gi??y Ananas tr?????c khi xu???t x?????ng ?????u tr???i qua nhi???u kh??u ki???m tra. Tuy v???y, trong qu?? tr??nh s??? d???ng, n???u nh???n th???y c??c l???i: g??y ?????, h??? ?????, ?????t ch??? may,...trong th???i gian 6 th??ng t??? ng??y mua h??ng, mong b???n s???m g???i s???n ph???m v??? Ananas nh???m gi??p ch??ng t??i c?? c?? h???i ph???c v??? b???n t???t h??n. Vui l??ng g???i s???n ph???m v??? b???t k??? c???a h??ng Ananas n??o, ho???c g???i ?????n trung t??m b???o h??nh Ananas ngay trong trung t??m TP.HCM trong gi??? h??nh ch??nh:</p>
                  <p>L???u 1, 75/1 Mai Th??? L???u, P. ??a Kao, Q1, TP.HCM<br />
                  Hotline: 028 3526 7774 </p>
                </h6>
              </div>
            </div>
            <div class="divider-1 hidden-xs hidden-sm"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 visible-xs visible-sm">
      <div class="row prd-detail-img">
      </div>
    </div>

  </div>
</div>

<div class="prd-detail-divider"></div>
<div class="prd-detail container-fluid">
  <div class="row">
    <div class="prd-detail-title">S???N PH???M LI??N QUAN</div>
    <div id="productRef" class="prd-detail-slide">

      <div class="thumbnail">
        <input type="hidden" value="25705" class="referenceId">
        <div class="cont-item"><a href="product-detail/a61039/"><img
          src="./document/wp-content/uploads/pro_vintas_A61039_1-500x500.jpg"></a>
        </div>
        <div class="caption">
          <h3 class="name"><a
            href="product-detail/a61039/">Vintas Mister - Low Top</a>
          </h3>
          <h3 class="color">Narcissuede</h3>
          <h3 class="price">580.000 VND </h3>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="prd-detail container-fluid" data-product-seen data-productID="430236"
data-action="addProductToSeen">
<input type="hidden" id="_wpnonce" name="_wpnonce" value="da2239d6a2" /><input type="hidden" name="_wp_http_referer" value="product-detail/av00011/" />    </div>
<input type="hidden" value="1" class="isProductDetailPage">
<input type="hidden" value="430236" class="productDetailId">
<input type="hidden" value="Basas Hook N'Loop NE - Low Top" class="productName">
<input type="hidden" value="White" class="productColor">
<input type="hidden" value="AV00011" class="productSku">
<input type="hidden" value="520000" class="productPrice">
<input type="hidden" value="Gi??y" class="productCategory">

<!-- END CONTENT -->