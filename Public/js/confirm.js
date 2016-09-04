// 学生提交三份报告时，确认添加结题报告
function confirmSend() {
	var r=confirm("确认提交？\n(一旦提交不可更改)");
	if (r==false)
	{
		return false;
	}
}