import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {
    const deleteButton = document.querySelector("#js-delete");
    
    deleteButton.addEventListener("click", (event) => {
        if(!confirm("削除してもよろしいですか？")){
            event.preventDefault();
        }
    });
});