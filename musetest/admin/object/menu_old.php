
<?php
//including the database connection file
include("connect.php");
error_reporting(0);
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();

$id = $_SESSION['id'];
$usr = $_SESSION['usr'];
////////// Check User /////////


$sql = "SELECT `usr`, `id`, `permission` FROM `tz_members` WHERE `id` = '$id' ";
$query = mysqli_query($link, $sql) or die("Can't Query");
$num_rows=mysqli_num_rows($query);

	for ($i=0; $i<$num_rows; $i++) {
	$result=mysqli_fetch_array($query);
	//echo "$result[id] $result[usr] <br>";
	$permission =$result['permission'];
        //echo " $result[permission]<br>";
}

if(($permission == 'superadmin') or ($permission == 'admin') or ($permission == 'Admin'))
{
	echo "	<li>
				<a href='index.php'>
					<i class='fa fa-dashboard'></i> <span>บริหารจัดการหลัก</span>
				</a>
			</li>
			<!--<li>
				<a href='addbg.php'>
					<i class='fa fa-archive'></i> <span>ข้อมูลหอจดหมายเหตุ</span>
				</a>
			</li>
			-->
			<li class='treeview'>
                            <a href='#'>
                                <i class='fa fa-archive'></i>
                                <span>ข้อมูลทั่วไป</span>
                                <i class='fa fa-angle-left pull-right'></i>
                            </a>
                            <ul class='treeview-menu'>
                            	<!--<li><a href='addbg.php'><i class='fa fa-angle-double-right'></i> ข้อมูลหอจดหมายเหตุ</a></li>-->
                            	<li><a href='addbg2.php'><i class='fa fa-angle-double-right'></i> ข้อมูลพิพิธภัณฑ์</a></li>
                            </ul>
            </li>
            <li class='treeview'>
                            <a href='#'>
                                <i class='fa fa-th'></i>
                                <span>เอกสารจดหมายเหตุ</span>
                                <i class='fa fa-angle-left pull-right'></i>
                            </a>
                            <ul class='treeview-menu'>
                            	<li><a href='showobj.php'><i class='fa fa-angle-double-right'></i> เอกสารจดหมายเหตุ</a></li>
                            	<li><a href='showobjcat.php'><i class='fa fa-angle-double-right'></i> ประเภทจดหมายเหตุ</a></li>
                            </ul>
            </li>
            <li class='treeview'>
                            <a href='#'>
                                <i class='fa fa-th'></i>
                                <span>พิพิธภัณฑ์</span>
                                <i class='fa fa-angle-left pull-right'></i>
                            </a>
                            <ul class='treeview-menu'>
                            	<li><a href='showmuse.php'><i class='fa fa-angle-double-right'></i> วัตถุจัดแสดง</a></li>
                            	<li><a href='showmusecat.php'><i class='fa fa-angle-double-right'></i> ประเภทวัตถุจัดแสดง</a></li>
                            </ul>
            </li>

			";
						echo "
							<li class='treeview'>
								<a href='#'>
									<i class='fa fa-leaf'></i>
									<span>พฤกษศาสตร์ชุมชน</span>
									<i class='fa fa-angle-left pull-right'></i>
								</a>
								<ul class='treeview-menu'>
									<li><a href='show-plant.php'><i class='fa fa-angle-double-right'></i> พรรณไม้</a></li>
									<li><a href='botanic-plant-cat.php'><i class='fa fa-angle-double-right'></i> ประเภทพรรณไม้</a></li>
									<li><a href='show-animal.php'><i class='fa fa-angle-double-right'></i> พันธุ์สัตว์</a></li>
									<li><a href='botanic-animal-cat.php'><i class='fa fa-angle-double-right'></i> ประเภทพันธุ์สัตว์</a></li>
									<li><a href='show-bio.php'><i class='fa fa-angle-double-right'></i> ชีวภาพ</a></li>
									<li><a href='botanic-bio-cat.php'><i class='fa fa-angle-double-right'></i> ประเภทชีวภาพ</a></li>
									<li><a href='show-idea.php'><i class='fa fa-angle-double-right'></i> ภูมิปัญญา</a></li>
									<li><a href='botanic-idea-cat.php'><i class='fa fa-angle-double-right'></i> ประเภทภูมิปัญญา</a></li>
								</ul>
							</li>
						";
						echo"
			<li>
                <a href='shownews.php'>
                    <i class='fa fa-calendar'></i> <span>ข่าวและกิจกรรม</span>
                </a>
            </li>
            <li class='treeview'>
                            <a href='#'>
                                <i class='fa fa-bar-chart-o'></i>
                                <span>สถิติ</span>
                                <i class='fa fa-angle-left pull-right'></i>
                            </a>
                            <ul class='treeview-menu'>
                            	<li><a href='https://www.google.com/analytics'><i class='fa fa-angle-double-right'></i> สถิติผู้เข้าชม</a></li>
                            	<li><a href='stat.php'><i class='fa fa-angle-double-right'></i> สถิติข้อมูลจัดแสดง</a></li>
                            </ul>
            </li>
			<li>
				<a href='user.php'>
					<i class='fa fa-user'></i> <span>ผู้ใช้งาน</span>
				</a>
			</li>";
}
else if ($permission == 'editor')
{
echo "	<li>
				<a href='index.php'>
					<i class='fa fa-dashboard'></i> <span>บริหารจัดการหลัก</span>
				</a>
			</li>
			<!--<li>
				<a href='addbg.php'>
					<i class='fa fa-archive'></i> <span>ข้อมูลหอจดหมายเหตุ</span>
				</a>
			</li>
			-->
            <li>
				<a href='showobj.php'>
					<i class='fa fa-th'></i> <span>เอกสารจดหมายเหตุ</span>
				</a>
			</li>
			<li>
				<a href='showmuse.php'>
					<i class='fa fa-th'></i> <span>พิพิธภัณฑ์</span>
				</a>
			</li>
			<li>
				<a href='stat.php'>
					<i class='fa fa-bar-chart-o'></i> <span>สถิติ</span>
				</a>
			</li>
			<li>
				<a href='user.php'>
					<i class='fa fa-user'></i> <span>ผู้ใช้งาน</span>
				</a>
			</li>";


}
else
{
	echo "	<li class='active'>
				<a href='index.php'>
					<i class='fa fa-th'></i> <span>หน้าแรก</span>
				</a>
			</li>
			<li>
				<a href='showobj.php'>
					<i class='fa fa-th'></i> <span>เอกสารจดหมายเหตุ</span>
				</a>
			</li>
			<li>
				<a href='showmuse.php'>
					<i class='fa fa-th'></i> <span>พิพิธภัณฑ์</span>
				</a>
			</li>
			<li>
				<a href='user.php'>
					<i class='fa fa-th'></i> <span>ผู้ใช้งาน</span>
				</a>
			</li>";
}
if($permission == 'superadmin') {
		echo "<li>
							<a href='setting.php'>
								<i class='fa fa-gear'></i> <span>ตั้งค่า</span>
							</a>
						</li>
		";
}

?>
