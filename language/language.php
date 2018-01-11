<?php
    function language($lang_id, $lang_value){
        switch ($lang_id){
            //ภาษาอังกฤษ
            case 'en':
                switch ($lang_value){
                    case 'setting':
                        return "setting";
                        break;
                    case 'logout':
                        return "logout";
                        break;
                    case 'add new':
                        return "add new";
                        break;
                    case 'all':
                        return "all item";
                        break;
                    case 'idcard':
                        return 'idcard';
                        break;
                    case 'name':
                        return "name";
                        break;
                    case 'lastname':
                        return 'lastname';
                        break;
                    case 'gender':
                        return 'gender';
                        break;
                    case 'add new people':
                        return 'add new people';
                        break;
                    case 'part':
                        return 'part';
                        break;
                    case 'background information':
                        return 'background information';
                        break;
                    case 'Interviewee’s Name':
                        return 'Interviewee’s Name';
                        break;
                    case 'evaluator':
                        return 'evaluator';
                        break;
                    case 'Date of Evaluation':
                        return 'Date of Evaluation';
                        break;
                    case 'Interpreter':
                        return 'Interpreter';
                        break;
                    case 'Interpreted Language':
                        return 'Interpreted Language';
                        break;
                    case 'please select':
                        return 'Please select';
                        break;
                    case 'yes':
                        return 'Yes';
                        break;
                    case 'no':
                        return 'No';
                        break;
                    case 'Language of Interview':
                        return 'Language of Interview';
                        break;
                    case 'Referring Group/Organization':
                        return 'Referring Group/Organization';
                        break;
                    case 'Client’s Gender':
                        return 'Client’s Gender';
                        break;
                    case 'male':
                        return 'male';
                        break;
                    case 'female':
                        return 'female';
                        break;
                    case 'Nationality (country of origin)':
                        return 'Nationality (country of origin)';
                        break;
                    case 'Religion':
                        return 'Religion';
                        break;
                    case 'Member of Ethnic Group':
                        return 'Member of Ethnic Group';
                        break;
                    case 'true':
                        return 'Yes';
                        break;
                    case 'fasle':
                        return 'No';
                        break;
                    case 'Specify':
                        return 'Specify';
                        break;
                    case 'house no':
                        return 'house no';
                        break;
                    case 'place':
                        return 'Place';
                        break;
                    case 'road':
                        return 'Road';
                        break;
                    case 'soi':
                        return 'Soi';
                        break;
                    case 'subdistrict':
                        return 'Subdistrict';
                        break;
                    case 'district':
                        return 'District';
                        break;
                    case 'province':
                        return 'Province';
                        break;
                    case 'post code':
                        return 'post';
                        break;
                    case 'birth date':
                        return 'birth date';
                        break;
                    case 'edit':
                        return 'edit';
                        break;
                    case 'client photo':
                        return 'photo';
                        break;
                }
            //ภาษาอังกฤษ
            case 'th':
                switch ($lang_value){
                    case 'setting':
                        return 'ตั้งค่า';
                        break;
                    case 'logout':
                        return "ออกจากระบบ";
                        break;
                    case 'add new':
                        return 'เพิ่มใหม่';
                        break;
                    case 'all':
                        return "ทั้งหมด";
                        break;
                    case 'idcard':
                        return 'เลขประจำตัวประชาชน';
                        break;
                    case 'name':
                        return "ชื่อ";
                        break;
                    case 'lastname':
                        return 'นามสกุล';
                        break;
                    case 'gender':
                        return 'เพศ';
                        break;
                    case 'add new people':
                        return 'เพิ่มบุคคลใหม่';
                        break;
                    case 'part':
                        return 'ส่วนที่';
                        break;
                    case 'background information':
                        return 'ข้อมูลพื้นฐาน';
                        break;
                    case 'Interviewee’s Name':
                        return 'ชื่อผู้ให้สัมภาษณ์';
                        break;
                    case 'evaluator':
                        return 'ผู้ประเมิน';
                        break;
                    case 'Date of Evaluation':
                        return 'วันที่ที่ทำการประเมิน';
                        break;
                    case 'Interpreter':
                        return 'ล่าม';
                        break;
                    case 'Interpreted Language':
                        return 'แปลเป็นภาษา';
                        break;
                    case 'please select':
                        return 'กรุณาเลือก';
                        break;
                    case 'yes':
                        return 'มี';
                        break;
                    case 'no':
                        return 'ไม่มี';
                        break;
                    case 'Language of Interview':
                        return 'สัมภาษณ์เป็นภาษา';
                        break;
                    case 'Referring Group/Organization':
                        return 'กลุ่ม / องค์กรที่ส่งต่อ';
                        break;
                    case 'Client’s Gender':
                        return 'เพศของลูกความ';
                        break;
                    case 'male':
                        return 'ชาย';
                        break;
                    case 'female':
                        return 'หญิง';
                        break;
                    case 'Nationality (country of origin)':
                        return 'สัญชาติ (ประเทศที่เป็นถิ่นกำเนิด)';
                        break;
                    case 'Religion':
                        return 'ศาสนา';
                        break;
                    case 'Member of Ethnic Group':
                        return 'สมาชิกของกลุ่มชาติพันธุ์';
                        break;
                    case 'true':
                        return 'ใช่';
                        break;
                    case 'fasle':
                        return 'ไม่ใช่';
                        break;
                    case 'Specify':
                        return 'ระบุ';
                        break;
                    case 'house no':
                        return 'ที่อยู่บ้านเลขที่';
                        break;
                    case 'place':
                        return 'หมู่ที่';
                        break;
                    case 'road':
                        return 'ถนน';
                        break;
                    case 'soi':
                        return 'ซอย';
                        break;
                    case 'subdistrict':
                        return 'ตำบล';
                        break;
                    case 'district':
                        return 'อำเภอ';
                        break;
                    case 'province':
                        return 'จังหวัด';
                        break;
                    case 'post code':
                        return 'รหัสไปรษณีย์';
                        break;
                    case 'birth date':
                        return 'วัน เดือน ปีเกิด';
                        break;
                    case 'edit':
                        return 'แก้ไข';
                        break;
                    case 'client photo':
                        return 'รูปภาพ';
                        break;
                }
        }
    }
?>

