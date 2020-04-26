$(e => {
  $("#sentBoxBtn").click(e => {
    let message = $("#messageInputBox").val();
    let url = "../components/messenger/send-message.php";
    if (message.length > 0) {
      $.post(url, createMessageObject(message), r => {
        serverResponse();
      });
    }
  });

  let serverResponse = () => {
    $("#messageInputBox").val("");
    loadMessages($("#receiver").text());
  };

  let loadMessages = receiverId => {
    let url = "../components/messenger/messageby-sender-receiver.php";
    //$("#messages").html("");
    $("#messages").load(url, {
      action: "getMessagesBySenderAndReciever",
      id: receiverId
    });
  };

  let createMessageObject = message => {
    return {
      sendBy: $("#sender").text(),
      receivedBy: $("#receiver").text(),
      message: message,
      sendTime: getCurrentTime(),
      receivedTime: getCurrentTime(),
      seenStatus: "delivered"
    };
  };

  let getCurrentTime = () => {
    let date = new Date();
    return date.getHours() + ":" + date.getMinutes();
  };
});
