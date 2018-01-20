<?php
    function language($lang_id, $lang_value){
        switch ($lang_id){
            //ภาษาอังกฤษ
            case 'en':
                switch ($lang_value){
                    case 'save in language':
                        return 'fill in';
                        break;
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
                    case 'consent':
                        return 'consent';
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
                    //----------------part2--------------------------
                    case 'Do you have any questions':
                        return 'Do you have any questions?';
                        break;
                    case 'ok':
                        return 'Yes';
                        break;
                    case 'not':
                        return 'No';
                        break;
                    case 'Do I have your permission to conduct the evaluation for your case':
                        return 'Do I have your permission to conduct the evaluation for your case';
                        break;
                    //----------------part3--------------------------
                    case 'PSYCHOSOCIAL HISTORY PRE-ARREST':
                        return 'psychosocial history pre-arrest';
                        break;
                    case 'How many years did you attend school':
                        return 'How many years did you attend school';
                        break;
                    case 'What is your primary occupation';
                        return 'what is your primary occupation';
                        break;
                    case 'What is your marital status':
                        return 'what is your marital status?';
                        break;
                    case 'Single':
                        return 'single';
                        break;
                    case 'Married':
                        return 'married';
                        break;
                    case 'Divorced':
                        return 'divorced ';
                        break;
                    case 'Widowed':
                        return 'widowed';
                        break;
                    case 'Other':
                        return 'other';
                        break;
                    case 'Specify':
                        return 'specify';
                        break;
                    case 'How many children do you have':
                        return 'How many children do you have?';
                        break;
                    case 'Have you had any major Illnesses':
                        return 'Have you had any major Illnesses?';
                        break;
                    case 'have':
                        return 'yes';
                        break;
                    case 'not have':
                        return 'no';
                        break;
                    case 'Have you had any injuries':
                        return 'Have you had any injuries?';
                        break;
                    case 'Have you had any surgeries':
                        return 'have you had any surgeries?';
                        break;
                    case 'Are you currently taking any medications':
                        return 'Are you currently taking any medications?';
                        break;
                    case 'Do you use tobacco':
                        return 'Do you use tobacco?';
                        break;
                    case 'Do you use alcohol':
                        return 'Do you use alcohol?';
                        break;
                    case 'Do you use drugs':
                        return 'Do you use drugs?';
                        break;
                    case 'packs per day':
                        return 'packs per day';
                        break;
                    case 'drinks per day':
                        return 'drinks per day';
                        break;
                    case 'explain':
                        return 'explain';
                        break;
                    case 'have eat':
                        return 'yes';
                        break;
                    case 'not eat':
                        return 'no';
                        break;
                    case 'If yes, has your usage changed (increased or decreased) since the time you were arrested':
                        return 'if yes, has your usage changed (increased or decreased) since the time you were arrested?';
                        break;
                    case 'Now I would like to talk about your life before you were arrested':
                        return 'now I would like to talk about your life before you were arrested';
                        break;
                    case 'How would you describe your family relationships':
                        return 'how would you describe your family relationships?';
                        break;
                    case 'Tell me about your work/education':
                        return 'tell me about your work/education';
                        break;
                    case 'How was your financial situation':
                        return 'how was your financial situation';
                        break;
                    case 'Social activities & relationships':
                        return 'social activities & relationships';
                        break;
                    case 'Tell me about political activities or affiliations':
                        return 'tell me about political activities or affiliations';
                        break;
                    case 'Have you had any past experiences of serious trauma that were NOT related to the current situation in Southern Thailand such as a major accident, childhood abuse, domestic violence, etc.':
                        return 'have you had any past experiences of serious trauma that were NOT related to the current situation in Southern Thailand such as a major accident, childhood abuse, domestic violence, etc.';
                        break;
                    case 'Tell me about your religious practices':
                        return 'tell me about your religious practices';
                        break;
                    case 'Describe your typical daily activities':
                        return 'describe your typical daily activities';
                        break;
                    case 'Tell me about your interests':
                        return 'tell me about your interests';
                        break;
                    case 'What were your plans for the future':
                        return 'what were your plans for the future';
                        break;
                    //-----------------------part4--------------------
                    case 'ALLEGATION OF TORTURE/ILL TREATMENT':
                        return 'allegation of torture/ill treatment';
                        break;
                    case 'Before being arrested did you experience any problems related to the current situation in Southern Thailand':
                        return 'Before being arrested did you experience any problems related to the current situation in Southern Thailand?';
                        break;
                    case 'explain':
                        return 'explain';
                        break;
                    case 'Have you been harassed or discriminated against because of your ethnicity or religion':
                        return 'Have you been harassed or discriminated against because of your ethnicity or religion?';
                        break;
                    case 'Have you been deprived of basic necessities such as food, water, medicine, or medical care':
                        return 'have you been deprived of basic necessities such as food, water, medicine, or medical care?';
                        break;
                    case 'Have you been isolated or separated, from family or friends (not including detention)':
                        return 'have you been isolated or separated, from family or friends (not including detention)?';
                        break;
                    case 'Have you been physically harmed':
                        return 'have you been physically harmed?';
                        break;
                    case 'Sexually harassed, humiliated, or assaulted':
                        return 'have you been sexually harassed, humiliated, or assaulted?';
                        break;
                    case 'Physically searched or had your home searched':
                        return 'have you been physically searched or had your home searched';
                        break;
                    case 'Property destroyed or confiscated':
                        return 'have you been property destroyed or confiscated';
                        break;
                    case 'Arrested, detained, or imprisoned':
                        return 'have you been arrested, detained, or imprisoned?';
                        break;
                    case 'Forced to harm family members or friends':
                        return 'have you been forced to harm family members or friends?';
                        break;
                }
            //ภาษาไทย
            case 'th':
                switch ($lang_value){
                    case 'save in language':
                        return 'บันทึกเป็นภาษา';
                        break;
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
                    case 'consent':
                        return 'ความยินยอม';
                        break;
                    //----------------part2--------------------------
                    case 'Do you have any questions':
                        return 'ท่านมีคำถามหรือไม่ ?';
                        break;
                    case 'ok':
                        return 'ได้';
                        break;
                    case 'not':
                        return 'ไม่ได้';
                        break;
                    case 'Do I have your permission to conduct the evaluation for your case':
                        return 'ท่านอนุญาตให้ข้าพเจ้าดำเนินการประเมินสำหรับใช้ในคดีของท่านหรือไม่?';
                        break;
                    //----------------part3--------------------------
                    case 'PSYCHOSOCIAL HISTORY PRE-ARREST':
                        return 'ประวัติทางด้านจิตใจและสังคมก่อนถูกจับ (จิตสังคม)';
                        break;
                    case 'How many years did you attend school':
                        return 'ได้รับการศึกษาหรือเรียนหนังสือเป็นเวลากี่ปี';
                        break;
                    case 'What is your primary occupation';
                        return 'ท่านมีอาชีพหลักอะไร';
                        break;
                    case 'What is your marital status':
                        return 'สถานภาพสมรสของท่าน?';
                        break;
                    case 'Single':
                        return 'โสด';
                        break;
                    case 'Married':
                        return 'สมรส';
                        break;
                    case 'Divorced':
                        return 'หย่า';
                        break;
                    case 'Widowed':
                        return 'หม้าย';
                        break;
                    case 'Other':
                        return 'อื่นๆ';
                        break;
                    case 'Specify':
                        return 'ระบุ';
                        break;
                    case 'How many children do you have':
                        return 'ท่านมีบุตรกี่คน?';
                        break;
                     case 'Have you had any major Illnesses':
                        return 'ท่านเคยเจ็บป่วยหนัก?';
                        break;
                    case 'have':
                        return 'เคย';
                        break;
                    case 'not have':
                        return 'ไม่เคย';
                        break;
                    case 'Have you had any injuries':
                        return 'ท่านเคยได้รับบาดเจ็บ?';
                        break;
                    case 'Have you had any surgeries':
                        return 'ท่านเคยเข้ารับการผ่าตัด?';
                        break;
                    case 'Are you currently taking any medications':
                        return 'ปัจจุบันท่านทานยาอะไรอยู่หรือไม่?';
                        break;
                    case 'Do you use tobacco':
                        return 'ท่านสูบบุหรี่?';
                        break;
                    case 'Do you use alcohol':
                        return 'ท่านดื่มสุรา?';
                        break;
                    case 'Do you use drugs':
                        return 'ท่านเสพยา?';
                        break;
                    case 'packs per day':
                        return 'จำนวนซองต่อวัน';
                        break;
                    case 'drinks per day':
                        return 'จำนวนแก้ต่อวัน';
                        break;
                    case 'explain':
                        return 'อธิบาย';
                        break;
                    case 'have eat':
                        return 'ทาน';
                        break;
                    case 'not eat':
                        return 'ไม่ทาน';
                        break;
                    case 'If yes, has your usage changed (increased or decreased) since the time you were arrested':
                        return 'หากใช่ การสูบบุหรี่ ดื่มสุรา เสพยามีการเปลี่ยนแปลง ( เพิ่มขึ้นหรือน้อยลง ) ตั้งแต่ท่านถูกจับกุมหรือไม่? ';
                        break;
                    case 'Now I would like to talk about your life before you were arrested':
                        return 'ตอนนี้ข้าพเจ้าขอถามเกี่ยวกับชีวิตความเป็นอยู่ของท่านก่อนถูกจับกุม';
                        break;
                    case 'How would you describe your family relationships':
                        return 'ความสัมพันธ์ในครอบครัวของท่านเป็นอย่างไร:';
                        break;
                    case 'Tell me about your work/education':
                        return 'กรุณาเล่าถึงการทำงาน / การศึกษา';
                        break;
                    case 'How was your financial situation':
                        return 'สถานะทางการเงินของท่านเป็นอย่างไร';
                        break;
                    case 'Social activities & relationships':
                        return 'กิจกรรมและความสัมพันธ์ทางสังคม';
                        break;
                    case 'Tell me about political activities or affiliations':
                        return 'กรุณาเล่าถึงกิจกรรมทางการเมือง หรือความเกี่ยวข้องทางการเมือง';
                        break;
                    case 'Have you had any past experiences of serious trauma that were NOT related to the current situation in Southern Thailand such as a major accident, childhood abuse, domestic violence, etc.':
                        return 'ท่านเคยประสบเหตุการณ์รุนแรงในอดีต อันไม่เกี่ยวข้องกับสถานการณ์ปัจจุบันในภาคใต้ของประเทศไทยหรือไม่ (เช่น อุบัติเหตครั้งใหญ่ การถูกทำร้ายในวัยเด็ก ความรุนแรงในครอบครัว เป็นต้น)';
                        break;
                    case 'Tell me about your religious practices':
                        return 'กรุณาเล่าถึงการปฏิบัติกิจทางศาสนาของท่าน';
                        break;
                    case 'Describe your typical daily activities':
                        return 'กรุณาเล่าถึงกิจวัตรประจำวัน';
                        break;
                    case 'Tell me about your interests':
                        return 'เรื่องที่ท่านมีความสนใจ';
                        break;
                    case 'What were your plans for the future':
                        return 'ท่านวางแผนอนาคตไว้อย่างไร';
                        break;
                    //------------------------part 4 ----------------------------
                    case 'ALLEGATION OF TORTURE/ILL TREATMENT':
                        return 'การกล่าวหาเรื่องทรมานและการปฏิบัติที่โหดร้าย';
                        break;
                    case 'Before being arrested did you experience any problems related to the current situation in Southern Thailand':
                        return 'ก่อนถูกจับกุม ท่านเคยประสบปัญหาใดๆที่เกี่ยวข้องสถานการณ์ปัจจุบันในภาคใต้ของประเทศไทยหรือไม่?';
                        break;
                    case 'explain':
                        return 'อธิบาย';
                        break;
                    case 'Have you been harassed or discriminated against because of your ethnicity or religion':
                        return 'ท่านเคยถูกคุกคามหรือเลือกปฏิบัติด้วยเพตุผลทางเชื้อชาติหรือศาสนา?';
                        break;
                    case 'Have you been deprived of basic necessities such as food, water, medicine, or medical care':
                        return 'ท่านเคยถูกตัดสิ่งจำเป็นขั้นพื้นฐาน เช่น อาหาร น้ำ ยา หรือการรักษาพยาบาล?';
                        break;
                    case 'Have you been isolated or separated, from family or friends (not including detention)':
                        return 'ท่านเคยถูกกีดกันหรือพลัดพรากจากครอบครัวหรือเพื่อน (ไม่รวมการกักขัง)?';
                        break;
                    case 'Have you been physically harmed':
                        return 'ท่านเคยถูกทำร้ายร่างกาย?';
                        break;
                    case 'Sexually harassed, humiliated, or assaulted':
                        return 'ท่านเคยถูกคุกคาม ทำให้อับอายหรือทำร้ายทางเพศ?';
                        break;
                    case 'Physically searched or had your home searched':
                        return 'ท่านเคยถูกค้นร่างกายหรือตรวจค้นบ้าน?';
                        break;
                    case 'Property destroyed or confiscated':
                        return 'ท่านเคยถูกทำลายหรือยึดทรัพย์สิน?';
                        break;
                    case 'Arrested, detained, or imprisoned':
                        return 'ท่านเคยถูกจับกุม กักขังหรือจำคุก?';
                        break;
                    case 'Forced to harm family members or friends':
                        return 'ท่านเคยถูกบังคับให้ทำร้ายสมาชิกในครอบครัวหรือเพื่อน?';
                        break;
                }
        }
    }
?>

