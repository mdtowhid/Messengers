$(() => {
  $("#routerElements .component:gt(0)").fadeOut(1);
  $("#leftMenu li button:first").addClass("active");

  $("#leftMenu li button").each((i, button) => {
    let btn = $(button);
    btn.click(e => {
      leftMenuActiveButtonHandler(btn);
      setRoute(btn);
    });
  });

  $("#userList li").each((i, li) => {
    $(li).click(e => {
      $("#userList li").removeClass("active");
      $(li).addClass("active");
      let receiverId = +$(li).attr("id");
      //from component/menus/left-menu.php #BUTTON SELECTOR
      let messengerButton = $("#Messanger");
      setRoute(messengerButton);
      leftMenuActiveButtonHandler(messengerButton);

      getMessages(receiverId);
      getReceiver(receiverId);
    });
  });
});

let getReceiver = receiverId => {
  let url = `../components/user/user.php`;
  $.post(url, { action: "getReceiver", id: receiverId }, data => {
    $("#userInfo").html(data);
  });
};

let getMessages = receiverId => {
  let url = `../components/messenger/messageby-sender-receiver.php`;
  $.post(
    url,
    { action: "getMessagesBySenderAndReciever", id: receiverId },
    data => {
      $("#messages").html(data);
    }
  );
};

let setRoute = button => {
  $("#routerElements .component").fadeOut(1);
  $(
    "#routerElements #" +
      $(button)
        .text()
        .toLowerCase()
  ).fadeIn();
};

let leftMenuActiveButtonHandler = btn => {
  $("#leftMenu li button").removeClass("active");
  btn.addClass("active");
};
