<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/bootstrap-toggle.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/main.css">
</head>
<body>
	<div class="container">
		<div id="accordion">
			<div id="g1" class="card mb-2">
				<div class="card-header p-0 group-bar">
					<div class="group-title">
						3.1 เครื่องต้นกำลัง
					</div>
					<div class="btn-group float-right">
						<button class="btn btn-success" data-parent="#accordion" data-toggle="collapse" href="#g1-content">เพิ่ม</button>
					</div>
				</div>
				<div id="g1-content" class="collapse">
					<div class="card-block p-0">
						<ul class="list-group">
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									1) เครื่องปั่นไฟ (Generator)
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="">
								</div>
								<div class="col-md-1">
									เครื่อง
								</div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									2) รถไถเดินตาม
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="" />
								</div>
								<div class="col-md-1">
									คัน
								</div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									3) รถไถสี่ล้อ เครื่องยนต์สูบเดียว
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="" />
								</div>
								<div class="col-md-1">
									คัน
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="g2" class="card mb-2">
				<div class="card-header p-0 group-bar">
					<div class="group-title">
						3.2 เครื่องมือเตรียมดิน
					</div>
					<div class="btn-group float-right">
						<button class="btn btn-success" data-parent="#accordion" data-toggle="collapse" href="#g2-content">เพิ่ม</button>
					</div>
				</div>
				<div id="g2-content" class="collapse">
					<div class="card-block p-0">
						<ul class="list-group">
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
								  ท่านได้นำเครื่องมือเหล่านี้ไปรับจ้างด้วยหรือไม่
								</div>
								<div class="col-md-2 text-right">
								  <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-offstyle="secondary" data-on=" " data-off=" " name="" value="">
								</div>
								<div class="col-md-1"></div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									1) ผาลไถ 3-4 จาน
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="">
								</div>
								<div class="col-md-1">
									ชุด
								</div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									2) ผาลพรวน 5-7 จาน
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="" />
								</div>
								<div class="col-md-1">
									ชุด
								</div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									3) ไถระเบิดดินดาน (ริปเปอร์)
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="" />
								</div>
								<div class="col-md-1">
									ชุด
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="g3" class="card mb-2">
				<div class="card-header p-0 group-bar">
					<div class="group-title">
						3.3 เครื่องปลูก/เครื่องมือหยอด
					</div>
					<div class="btn-group float-right">
						<button class="btn btn-success" data-parent="#accordion" data-toggle="collapse" href="#g3-content">เพิ่ม</button>
					</div>
				</div>
				<div id="g3-content" class="collapse">
					<div class="card-block p-0">
						<ul class="list-group">
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
								  ท่านได้นำเครื่องมือเหล่านี้ไปรับจ้างด้วยหรือไม่
								</div>
								<div class="col-md-2 text-right">
								  <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-offstyle="secondary" data-on=" " data-off=" " name="" value="">
								</div>
								<div class="col-md-1"></div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									1) เครื่องเพาะกล้า
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="">
								</div>
								<div class="col-md-1">
									เครื่อง
								</div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									2) รถดำนาแบบเดินตาม
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="" />
								</div>
								<div class="col-md-1">
									เครื่อง
								</div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									3) รถดำนาแบบนั่งขับ
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="" />
								</div>
								<div class="col-md-1">
									เครื่อง
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="g4" class="card mb-2">
				<div class="card-header p-0 group-bar">
					<div class="group-title">
						3.4 เครื่องมือดูแลรักษา
					</div>
					<div class="btn-group float-right">
						<button class="btn btn-success" data-parent="#accordion" data-toggle="collapse" href="#g4-content">เพิ่ม</button>
					</div>
				</div>
				<div id="g4-content" class="collapse">
					<div class="card-block p-0">
						<ul class="list-group">
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
								  ท่านได้นำเครื่องมือเหล่านี้ไปรับจ้างด้วยหรือไม่
								</div>
								<div class="col-md-2 text-right">
								  <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-offstyle="secondary" data-on=" " data-off=" " name="" value="">
								</div>
								<div class="col-md-1"></div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									1) เครื่องพ่นยาติดท้ายรถแทรกเตอร์
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="">
								</div>
								<div class="col-md-1">
									เครื่อง
								</div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									2) เครื่องพ่นยาสะพายหลัง
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="" />
								</div>
								<div class="col-md-1">
									เครื่อง
								</div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									3) เครื่องใส่ปุ๋ยติดท้ายรถแทรกเตอร์
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="" />
								</div>
								<div class="col-md-1">
									เครื่อง
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="g5" class="card mb-2">
				<div class="card-header p-0 group-bar">
					<div class="group-title">
						3.5 เครื่องมือเก็บเกี่ยว
					</div>
					<div class="btn-group float-right">
						<button class="btn btn-success" data-parent="#accordion" data-toggle="collapse" href="#g5-content">เพิ่ม</button>
					</div>
				</div>
				<div id="g5-content" class="collapse">
					<div class="card-block p-0">
						<ul class="list-group">
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
								  ท่านได้นำเครื่องมือเหล่านี้ไปรับจ้างด้วยหรือไม่
								</div>
								<div class="col-md-2 text-right">
								  <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-offstyle="secondary" data-on=" " data-off=" " name="" value="">
								</div>
								<div class="col-md-1"></div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									1) รถเกี่ยวนวดข้าว (คอมไบน์ข้าว) ขนาดหน้ากว้างน้อยกว่า 3 เมตร
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="">
								</div>
								<div class="col-md-1">
									เครื่อง
								</div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									2) เครื่องพ่นยาสะพายหลัง
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="" />
								</div>
								<div class="col-md-1">
									เครื่อง
								</div>
							</li>
							<li class="list-group-item list-group-item-action">
								<div class="col-md-9">
									3) เครื่องใส่ปุ๋ยติดท้ายรถแทรกเตอร์
								</div>
								<div class="col-md-2 text-right">
									<input class="input-number" type="number" name="" min="0" value="" />
								</div>
								<div class="col-md-1">
									เครื่อง
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>



	<script type="text/javascript" src="<?=base_url()?>/assets/js/jquery.slim.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>/assets/js/tether.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>/assets/js/bootstrap-toggle.min.js"></script>
</body>
</html>
