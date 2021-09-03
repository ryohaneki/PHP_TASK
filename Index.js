function check(){
if(window.confirm('投稿してよろしいですか？')){
    return true; 
}
else{
    window.alert('キャンセルされました');
    return false;
}
}