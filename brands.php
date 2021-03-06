<?php
include 'header.php';
if (isset($_GET["lang"])){
$lang = $_GET["lang"];
}
else {
    $lang = "el";
}
?>

<div class="brand-page-wrapper clearfix">
	<h1 class="title"><?php if ($lang == "en")
                            echo "Our Brands";
                        else {
                            echo "Οι Μάρκες μας";
                        } ?></h1>

	<ul class="grid clearfix">
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/takakia-diskoplakes.jpg" alt="<?php if ($lang == "en")
                                                    echo "BRAKE PADS AND DISKS";
                                                else {
                                                    echo "ΤΑΚΑΚΙΑ – ΔΙΣΚΟΠΛΑΚΕΣ";
                                                } ?>" />
					<figcaption>
                                            <div class="clearfix">
                                                <h2><?php if ($lang == "en")
                                                    echo "BRAKE PADS AND DISKS";
                                                else {
                                                    echo "ΤΑΚΑΚΙΑ – ΔΙΣΚΟΠΛΑΚΕΣ";
                                                } ?></h2>
                                            </div>
                                            <p><?php if ($lang == "en")
                            echo "View our brands";
                        else {
                            echo "Δείτε τις μάρκες μας";
                        } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/ate.jpg" alt="ATE" />
					<span class="brand-title">ATE</span>
				</li>
				<li class="brand">
					<img src="/images/brands/japanparts.png" alt="JAPANPARTS" />
					<span class="brand-title">JAPANPARTS</span>
				</li>
				<li class="brand">
					<img src="/images/brands/zetec.jpg" alt="ZETEC" />
					<span class="brand-title">ZETEC</span>
				</li>
				<li class="brand">
					<img src="/images/brands/ferodo.jpg" alt="FERODO" />
					<span class="brand-title">FERODO</span>
				</li>
				<li class="brand">
					<img src="/images/brands/textar.png" alt="TEXTAR" />
					<span class="brand-title">TEXTAR</span>
				</li>
				<li class="brand">
					<img src="/images/brands/remsa.jpg" alt="REMSA" />
					<span class="brand-title">REMSA</span>
				</li>
				<li class="brand">
					<img src="/images/brands/matec.jpg" alt="MATEC" />
					<span class="brand-title">MATEC</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/siblektes.jpg" alt="<?php if ($lang == "en")
                            echo "CLUTCHES";
                        else {
                            echo "ΣΥΜΠΛΕΚΤΕΣ";
                        } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                            echo "CLUTCHES";
                        else {
                            echo "ΣΥΜΠΛΕΚΤΕΣ";
                        } ?></h2>
						</div>
                                            <p><?php if ($lang == "en")
                                                echo "View our brands";
                                            else {
                                                echo "Δείτε τις μάρκες μας";
                                            } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/luk.jpg" alt="LUK" />
					<span class="brand-title">LUK</span>
				</li>
				<li class="brand">
					<img src="/images/brands/sachs.jpg" alt="SACHS" />
					<span class="brand-title">SACHS</span>
				</li>
				<li class="brand">
					<img src="/images/brands/valeo.png" alt="VALEO" />
					<span class="brand-title">VALEO</span>
				</li>
				<li class="brand">
					<img src="/images/brands/aisin.jpg" alt="AISIN" />
					<span class="brand-title">AISIN</span>
				</li>
				<li class="brand">
					<img src="/images/brands/borg-and-beck.jpg" alt="BORG & BECK" />
					<span class="brand-title">BORG & BECK</span>
				</li>
				<li class="brand">
					<img src="/images/brands/exedy.png" alt="EXEDY" />
					<span class="brand-title">EXEDY</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/amortiser.jpg" alt="<?php if ($lang == "en")
                                                    echo "SHOCK ABSORBERS";
                                                else {
                                                    echo "ΑΜΟΡΤΙΣΕΡ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "SHOCK ABSORBERS";
                                                else {
                                                    echo "ΑΜΟΡΤΙΣΕΡ";
                                                } ?></h2>
						</div>
                                            <p><?php if ($lang == "en")
                                                echo "View our brands";
                                            else {
                                                echo "Δείτε τις μάρκες μας";
                                            } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/kayaba.png" alt="KAYABA" />
					<span class="brand-title">KAYABA</span>
				</li>
				<li class="brand">
					<img src="/images/brands/sachs.jpg" alt="SACHS" />
					<span class="brand-title">SACHS</span>
				</li>
				<li class="brand">
					<img src="/images/brands/monroe.png" alt="MONROE" />
					<span class="brand-title">MONROE</span>
				</li>
				<li class="brand">
					<img src="/images/brands/bilstein.jpg" alt="BILSTEIN" />
					<span class="brand-title">BILSTEIN</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/empros-sistima.jpg" alt="<?php if ($lang == "en")
                                                    echo "FRONT SYSTEM";
                                                else {
                                                    echo "ΜΠΡΟΣΤΙΝΟ ΣΥΣΤΗΜΑ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "FRONT SYSTEM";
                                                else {
                                                    echo "ΜΠΡΟΣΤΙΝΟ ΣΥΣΤΗΜΑ";
                                                } ?></h2>
						</div>
                                            <p><?php if ($lang == "en")
                                                echo "View our brands";
                                            else {
                                                echo "Δείτε τις μάρκες μας";
                                            } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/japanparts.png" alt="JAPANPARTS" />
					<span class="brand-title">JAPANPARTS</span>
				</li>
				<li class="brand">
					<img src="/images/brands/monroe.png" alt="MONROE" />
					<span class="brand-title">MONROE</span>
				</li>
				<li class="brand">
					<img src="/images/brands/moog.jpg" alt="MOOG" />
					<span class="brand-title">MOOG</span>
				</li>
				<li class="brand">
					<img src="/images/brands/ruville.png" alt="RUVILLE" />
					<span class="brand-title">RUVILLE</span>
				</li>
				<li class="brand">
					<img src="/images/brands/ir.gif" alt="IR" />
					<span class="brand-title">IR</span>
				</li>
				<li class="brand">
					<img src="/images/brands/febi.jpg" alt="FEBI" />
					<span class="brand-title">FEBI</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
        </ul>
        
	<ul class="grid clearfix">
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/bilioforoi.jpg" alt="<?php if ($lang == "en")
                                                    echo "CV-JOINTS";
                                                else {
                                                    echo "ΜΠΙΛΙΟΦΟΡΟΙ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "CV-JOINTS";
                                                else {
                                                    echo "ΜΠΙΛΙΟΦΟΡΟΙ";
                                                } ?></h2>
						</div>
                                            <p><?php if ($lang == "en")
                                                echo "View our brands";
                                            else {
                                                echo "Δείτε τις μάρκες μας";
                                            } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/lobro.png" alt="LOBRO" />
					<span class="brand-title">LOBRO</span>
				</li>
				<li class="brand">
					<img src="/images/brands/gsp.png" alt="GSP" />
					<span class="brand-title">GSP</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/lipantika.jpg" alt="<?php if ($lang == "en")
                                                    echo "LUBRICANTS - CHEMICALS";
                                                else {
                                                    echo "ΛΙΠΑΝΤΙΚΑ – ΧΗΜΙΚΑ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "LUBRICANTS - CHEMICALS";
                                                else {
                                                    echo "ΛΙΠΑΝΤΙΚΑ – ΧΗΜΙΚΑ";
                                                } ?></h2>
						</div>
                                            <p><?php if ($lang == "en")
                                                echo "View our brands";
                                            else {
                                                echo "Δείτε τις μάρκες μας";
                                            } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/mofin.png" alt="MOFIN" />
					<span class="brand-title">MOFIN</span>
				</li>
				<li class="brand">
					<img src="/images/brands/pemco.jpg" alt="PEMCO" />
					<span class="brand-title">PEMCO</span>
				</li>
				<li class="brand">
					<img src="/images/brands/castrol.png" alt="CASTROL" />
					<span class="brand-title">CASTROL</span>
				</li>
				<li class="brand">
					<img src="/images/brands/wistrol.png" alt="WISTROL" />
					<span class="brand-title">WISTROL</span>
				</li>
                                <li class="brand">
					<img src="/images/brands/LIQUI-MOLY.png" alt="LIQUI-MOLY" />
					<span class="brand-title">LIQUI-MOLY</span>
				</li>
                                <li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/filtra.jpg" alt="<?php if ($lang == "en")
                                                    echo "FILTERS";
                                                else {
                                                    echo "ΦΙΛΤΡΑ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "FILTERS";
                                                else {
                                                    echo "ΦΙΛΤΡΑ";
                                                } ?></h2>
						</div>
                                            <p><?php if ($lang == "en")
                                                echo "View our brands";
                                            else {
                                                echo "Δείτε τις μάρκες μας";
                                            } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/japanparts.png" alt="JAPANPARTS" />
					<span class="brand-title">JAPANPARTS</span>
				</li>
				<li class="brand">
					<img src="/images/brands/itn.png" alt="ITN" />
					<span class="brand-title">ITN</span>
				</li>
				<li class="brand">
					<img src="/images/brands/mann-filter.jpg" alt="MANN FILTER" />
					<span class="brand-title">MANN FILTER</span>
				</li>
				<li class="brand">
					<img src="/images/brands/filtron.png" alt="FILTRON" />
					<span class="brand-title">FILTRON</span>
				</li>
				<li class="brand">
					<img src="/images/brands/sct.jpg" alt="SCT" />
					<span class="brand-title">SCT</span>
				</li>
				<li class="brand">
					<img src="/images/brands/fiba.png" alt="FIBA" />
					<span class="brand-title">FIBA</span>
				</li>
				<li class="brand">
					<img src="/images/brands/muller.jpg" alt="MULLER" />
					<span class="brand-title">MULLER</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/ilektrologika.jpg" alt="<?php if ($lang == "en")
                                                    echo "ELECTRONICS";
                                                else {
                                                    echo "ΗΛΕΚΤΡΟΛΟΓΙΚΑ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "ELECTRONICS";
                                                else {
                                                    echo "ΗΛΕΚΤΡΟΛΟΓΙΚΑ";
                                                } ?></h2>
						</div>
						<p><?php if ($lang == "en")
                                                    echo "View our brands";
                                                else {
                                                    echo "Δείτε τις μάρκες μας";
                                                } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/bosch.png" alt="BOSCH" />
					<span class="brand-title">BOSCH</span>
				</li>
				<li class="brand">
					<img src="/images/brands/ngk.png" alt="NGK" />
					<span class="brand-title">NGK</span>
				</li>
				<li class="brand">
					<img src="/images/brands/denso.png" alt="DENSO" />
					<span class="brand-title">DENSO</span>
				</li>
				<li class="brand">
					<img src="/images/brands/beru.jpg" alt="BERU" />
					<span class="brand-title">BERU</span>
				</li>
				<li class="brand">
					<img src="/images/brands/facet.png" alt="FACET" />
					<span class="brand-title">FACET</span>
				</li>
				<li class="brand">
					<img src="/images/brands/hitachi.png" alt="HITACHI" />
					<span class="brand-title">HITACHI</span>
				</li>
				<li class="brand">
					<img src="/images/brands/huco.png" alt="HUCO" />
					<span class="brand-title">HUCO</span>
				</li>
				<li class="brand">
					<img src="/images/brands/magnetimarelli.png" alt="MAGNETI MARELLI" />
					<span class="brand-title">MAGNETI MARELLI</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
        </ul>
        
	<ul class="grid clearfix">
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/mpataries.jpg" alt="<?php if ($lang == "en")
                                                    echo "BATERIES";
                                                else {
                                                    echo "ΜΠΑΤΑΡΙΕΣ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "BATERIES";
                                                else {
                                                    echo "ΜΠΑΤΑΡΙΕΣ";
                                                } ?></h2>
						</div>
						<p><?php if ($lang == "en")
                                                    echo "View our brands";
                                                else {
                                                    echo "Δείτε τις μάρκες μας";
                                                } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/hankook.png" alt="HANKOOK" />
					<span class="brand-title">HANKOOK</span>
				</li>
				<li class="brand">
					<img src="/images/brands/bosch.png" alt="BOSCH" />
					<span class="brand-title">BOSCH</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/ialokatharistires.jpg" alt="<?php if ($lang == "en")
                                                    echo "WINDSHIELD WIPERS";
                                                else {
                                                    echo "ΥΑΛΟΚΑΘΑΡΙΣΤΗΡΕΣ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "WINDSHIELD WIPERS";
                                                else {
                                                    echo "ΥΑΛΟΚΑΘΑΡΙΣΤΗΡΕΣ";
                                                } ?></h2>
						</div>
						<p><?php if ($lang == "en")
                                                    echo "View our brands";
                                                else {
                                                    echo "Δείτε τις μάρκες μας";
                                                } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/japanparts.png" alt="JAPANPARTS" />
					<span class="brand-title">JAPANPARTS</span>
				</li>
				<li class="brand">
					<img src="/images/brands/itn.png" alt="ITN" />
					<span class="brand-title">ITN</span>
				</li>
				<li class="brand">
					<img src="/images/brands/bosch.png" alt="BOSCH" />
					<span class="brand-title">BOSCH</span>
				</li>
				<li class="brand">
					<img src="/images/brands/valeo.png" alt="VALEO" />
					<span class="brand-title">VALEO</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/imandes.jpg" alt="<?php if ($lang == "en")
                                                    echo "BELTS";
                                                else {
                                                    echo "ΙΜΑΝΤΕΣ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "BELTS";
                                                else {
                                                    echo "ΙΜΑΝΤΕΣ";
                                                } ?></h2>
						</div>
						<p><?php if ($lang == "en")
                                                    echo "View our brands";
                                                else {
                                                    echo "Δείτε τις μάρκες μας";
                                                } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/continental.jpg" alt="CONTINENTAL" />
					<span class="brand-title">CONTINENTAL</span>
				</li>
				<li class="brand">
					<img src="/images/brands/gates.jpg" alt="GATES" />
					<span class="brand-title">GATES</span>
				</li>
				<li class="brand">
					<img src="/images/brands/dayco.png" alt="DAYCO" />
					<span class="brand-title">DAYCO</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/rouleman.jpg" alt="<?php if ($lang == "en")
                                                    echo "wHEEL BEARINGS";
                                                else {
                                                    echo "ΡΟΥΛΕΜΑΝ ΑΥΤΟΚΙΝΗΤΟΥ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "wHEEL BEARINGS";
                                                else {
                                                    echo "ΡΟΥΛΕΜΑΝ ΑΥΤΟΚΙΝΗΤΟΥ";
                                                } ?></h2>
						</div>
						<p><?php if ($lang == "en")
                                                    echo "View our brands";
                                                else {
                                                    echo "Δείτε τις μάρκες μας";
                                                } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/fag.png" alt="FAG" />
					<span class="brand-title">FAG</span>
				</li>
				<li class="brand">
					<img src="/images/brands/moog.jpg" alt="MOOG" />
					<span class="brand-title">MOOG</span>
				</li>
				<li class="brand">
					<img src="/images/brands/gsp.png" alt="GSP" />
					<span class="brand-title">GSP</span>
				</li>
				<li class="brand">
					<img src="/images/brands/japanparts.png" alt="JAPANPARTS" />
					<span class="brand-title">JAPANPARTS</span>
				</li>
				<li class="brand">
					<img src="/images/brands/bendix.gif" alt="BENDIX" />
					<span class="brand-title">BENDIX</span>
				</li>
				<li class="brand">
					<img src="/images/brands/skf.png" alt="SKF" />
					<span class="brand-title">SKF</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
        </ul>
        
	<ul class="grid clearfix">
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/tsimouxes.jpg" alt="<?php if ($lang == "en")
                                                    echo "SEALS";
                                                else {
                                                    echo "ΤΣΙΜΟΥΧΕΣ – ΣΤΕΓΑΝΟΠΟΙΗΤΙΚΑ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
                                                    <h2><?php if ($lang == "en")
                                                    echo "SEALS";
                                                else {
                                                    echo "ΤΣΙΜΟΥΧΕΣ – ΣΤΕΓΑΝΟΠΟΙΗΤΙΚΑ";
                                                } ?></h2>
						</div>
						<p><?php if ($lang == "en")
                                                    echo "View our brands";
                                                else {
                                                    echo "Δείτε τις μάρκες μας";
                                                } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/corteco.png" alt="CORTECO" />
					<span class="brand-title">CORTECO</span>
				</li>
				<li class="brand">
					<img src="/images/brands/payen.png" alt="PAYEN" />
					<span class="brand-title">PAYEN</span>
				</li>
				<li class="brand">
					<img src="/images/brands/victor-reinz.png" alt="VICTOR-REINZ" />
					<span class="brand-title">VICTOR-REINZ</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/antlies-nerou.jpg" alt="<?php if ($lang == "en")
                                                    echo "WATER PUMPS";
                                                else {
                                                    echo "ΑΝΤΛΙΕΣ ΝΕΡΟΥ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "WATER PUMPS";
                                                else {
                                                    echo "ΑΝΤΛΙΕΣ ΝΕΡΟΥ";
                                                } ?></h2>
						</div>
						<p><?php if ($lang == "en")
                                                    echo "View our brands";
                                                else {
                                                    echo "Δείτε τις μάρκες μας";
                                                } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/gmb.png" alt="GMB" />
					<span class="brand-title">GMB</span>
				</li>
				<li class="brand">
					<img src="/images/brands/airtex.png" alt="AIRTEX" />
					<span class="brand-title">AIRTEX</span>
				</li>
				<li class="brand">
					<img src="/images/brands/aisin.jpg" alt="AISIN" />
					<span class="brand-title">AISIN</span>
				</li>
				<li class="brand">
					<img src="/images/brands/mannex.jpg" alt="MANNEX" />
					<span class="brand-title">MANNEX</span>
				</li>
				<li class="brand">
					<img src="/images/brands/dolz.jpg" alt="DOLZ" />
					<span class="brand-title">DOLZ</span>
				</li>
				<li class="brand">
					<img src="/images/brands/japanparts.png" alt="JAPANPARTS" />
					<span class="brand-title">JAPANPARTS</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/antlies-benzinis.jpg" alt="<?php if ($lang == "en")
                                                    echo "FUEL PUMPS";
                                                else {
                                                    echo "ΑΝΤΛΙΕΣ ΒΕΝΖΙΝΗΣ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "FUEL PUMPS";
                                                else {
                                                    echo "ΑΝΤΛΙΕΣ ΒΕΝΖΙΝΗΣ";
                                                } ?></h2>
						</div>
						<p><?php if ($lang == "en")
                                                    echo "View our brands";
                                                else {
                                                    echo "Δείτε τις μάρκες μας";
                                                } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/nrg.jpg" alt="NRG" />
					<span class="brand-title">NRG</span>
				</li>
				<li class="brand">
					<img src="/images/brands/hoffer.png" alt="HOFFER" />
					<span class="brand-title">HOFFER</span>
				</li>
				<li class="brand">
					<img src="/images/brands/sidat.png" alt="SIDAT" />
					<span class="brand-title">SIDAT</span>
				</li>
				<li class="brand">
					<img src="/images/brands/vdo.png" alt="VDO" />
					<span class="brand-title">VDO</span>
				</li>
				<li class="brand">
					<img src="/images/brands/bosch.png" alt="BOSCH" />
					<span class="brand-title">BOSCH</span>
				</li>
				<li class="brand">
					<img src="/images/brands/pierburg.png" alt="PIERBURG" />
					<span class="brand-title">PIERBURG</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/psigeia.jpg" alt="<?php if ($lang == "en")
                                                    echo "COOLERS";
                                                else {
                                                    echo "ΨΥΓΕΙΑ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "COOLERS";
                                                else {
                                                    echo "ΨΥΓΕΙΑ";
                                                } ?></h2>
						</div>
						<p><?php if ($lang == "en")
                                                    echo "View our brands";
                                                else {
                                                    echo "Δείτε τις μάρκες μας";
                                                } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/koyo.png" alt="KOYO" />
					<span class="brand-title">KOYO</span>
				</li>
				<li class="brand">
					<img src="/images/brands/nissens.png" alt="NISSENS" />
					<span class="brand-title">NISSENS</span>
				</li>
				<li class="brand">
					<img src="/images/brands/nrf.png" alt="NRF" />
					<span class="brand-title">NRF</span>
				</li>
				<li class="brand">
					<img src="/images/brands/valeo.png" alt="VALEO" />
					<span class="brand-title">VALEO</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
        </ul>
        
	<ul class="grid clearfix">
		<li class="accordion-item">
			<div class="image-wrapper">
				<figure class="effect-sarah">
					<img src="/images/vaseis-kinitira.jpg" alt="<?php if ($lang == "en")
                                                    echo "MOTOR BASES";
                                                else {
                                                    echo "ΒΑΣΕΙΣ ΚΙΝΗΤΗΡΑ";
                                                } ?>" />
					<figcaption>
						<div class="clearfix">
							<h2><?php if ($lang == "en")
                                                    echo "MOTOR BASES";
                                                else {
                                                    echo "ΒΑΣΕΙΣ ΚΙΝΗΤΗΡΑ";
                                                } ?></h2>
						</div>
						<p><?php if ($lang == "en")
                                                    echo "View our brands";
                                                else {
                                                    echo "Δείτε τις μάρκες μας";
                                                } ?></p>
						<a href="javascript:void(0)">View more</a>
					</figcaption>
				</figure>
			</div>
			<ul class="brands-wrapper">
				<li class="brand">
					<img src="/images/brands/japanparts.png" alt="JAPANPARTS" />
					<span class="brand-title">JAPANPARTS</span>
				</li>
				<li class="brand">
					<img src="/images/brands/metalcaucho.png" alt="METALCAUCHO" />
					<span class="brand-title">METALCAUCHO</span>
				</li>
				<li class="brand">
					<img src="/images/brands/gsp.png" alt="GSP" />
					<span class="brand-title">GSP</span>
				</li><li class="close"><?php if ($lang == "en")
                                                    echo "Close";
                                                else {
                                                    echo "Κλείσιμο";
                                                } ?></li>
			</ul>
		</li>
	</ul>
</div>
<?php include 'footer.php';  ?>