/**
 * javascript傳入起始日與結束
 * 日期格式為民國年月日(EX.1060802)
 * 傳入 1060702,1060802 會回傳31天
 * 傳入 1060901,1061001 會回傳30天
 * @param  sDate 
 * @param  eDate 
 * @return 天數
 */
function calRocIntervalDays(sDate,eDate){
    var msecPerMinute = 1000 * 60;
    var msecPerHour = msecPerMinute * 60;
    var msecPerDay = msecPerHour * 24;

    sDate = leftPad(sDate,7,'0');
    eDate = leftPad(eDate,7,'0');

    var begDateStr = "" + sDate.substring(3,5) + "/" + sDate.substring(5) + "/" + (Number(sDate.substring(0,3)) + Number(1911));
    var endDateStr = "" + eDate.substring(3,5) + "/" + eDate.substring(5) + "/" + (Number(eDate.substring(0,3)) + Number(1911));

    var begDate = new Date(begDateStr);
    var endDate = new Date(endDateStr);

    var interval = endDate.getTime() - begDate.getTime();
    var days = Math.floor(interval / msecPerDay);

    return days;
}

/**
 * javascript傳入起始日與結束
 * 日期格式為西元年月日(EX.20170801)
 * 傳入 20170702,20170802 會回傳31天
 * 傳入 20170901,20171001 會回傳30天
 * @param  sDate 
 * @param  eDate 
 * @return 天數
 */
function calCEIntervalDays(sDate,eDate){
    var msecPerMinute = 1000 * 60;
    var msecPerHour = msecPerMinute * 60;
    var msecPerDay = msecPerHour * 24;

    var begDateStr = "" + sDate.substring(4,6) + "/" + sDate.substring(6) + "/" + sDate.substring(0,4);
    var endDateStr = "" + eDate.substring(4,6) + "/" + eDate.substring(6) + "/" + eDate.substring(0,4);

    var begDate = new Date(begDateStr);
    var endDate = new Date(endDateStr);

    var interval = endDate.getTime() - begDate.getTime();
    var days = Math.floor(interval / msecPerDay);
    
    return days;
}

/**
 * 向左補零
 * Ex:leftPad(3,3,'0')->003
 * @param  val    [原值]
 * @param  padLen [補足長度]
 * @param  padVal [補足值]
 * @return        [description]
 */
function leftPad(val, padLen, padVal) {
    if (val.toString().length < padLen) {
        for (var i = 1; i < padLen; i++) {
            val = padVal + val;
            if(val.toString().length >= padLen){
                break;
            }
        }
    }
    return val;
}
