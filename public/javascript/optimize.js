function toggleDropdown(buttonSelector, dropdownSelector) {
    document.querySelector(buttonSelector).addEventListener("click", function() {
        document.querySelector(dropdownSelector).classList.toggle("hidden");
    });
}

toggleDropdown("div.upload-btn", ".upload-dropdown");
toggleDropdown("div.notification-button", ".notification-dropdown");
toggleDropdown("img.show-profile", "div.profile-wrapper > div.main-profile-dropdown");
toggleDropdown("i.back-main-dropdown-button.change-account-button", ".change-account-dropdown");
toggleDropdown("div.main-profile-dropdown .change-account-button", "div.profile-wrapper > div.change-account-dropdown");
toggleDropdown("i.back-main-dropdown-button.change-ui-button", ".change-ui-dropdown");
toggleDropdown("div.main-profile-dropdown .change-ui-button", "div.profile-wrapper > div.change-ui-dropdown");
toggleDropdown("i.back-main-dropdown-button.change-language-button", ".change-language-dropdown");
toggleDropdown("div.main-profile-dropdown .change-language-button", "div.profile-wrapper > div.change-language-dropdown");
toggleDropdown(".video-actions > .button-dropdown", ".video-actions > .dropdown");
toggleDropdown("i.ti-menu", "div.sidebar-wrapper");
toggleDropdown("div.me-sidebar > div.more-button", "div.me-sidebar > div.less-button");

document.addEventListener("click", function(event) {
    var dropdowns = document.querySelectorAll(".button-dropdown");
    dropdowns.forEach(function(dropdownButton) {
        if (!dropdownButton.parentElement.contains(event.target)) {
            let dropdownElement = dropdownButton.parentElement.querySelector(".dropdown");
            if (!dropdownElement.classList.contains("hidden")) {
                dropdownElement.classList.add("hidden");
            }
        }
    });
});

function toggleShortItems(showMore) {
    document.querySelector(".show-more-short-button").classList.toggle("hidden", showMore);
    document.querySelector(".show-less-short-button").classList.toggle("hidden", !showMore);

    let shortGridItems = document.querySelector("div.short-container > div.shorts-grid").querySelectorAll("div.short-item");
    let shortItemsShowCount = showMore ? shortGridItems.length : getShortItemsShowCount();

    for (let i = 0; i < shortGridItems.length; i++) {
        shortGridItems[i].classList.toggle("hidden", i >= shortItemsShowCount);
    }
}

function getShortItemsShowCount() {
    let screenWidth = window.innerWidth;
    if (screenWidth <= 1024) {
        return 2;
    } else if (screenWidth <= 1280) {
        return 3;
    } else {
        return 5;
    }
}

document.querySelector(".show-more-short-button").addEventListener("click", function() {
    toggleShortItems(true);
});

document.querySelector(".show-less-short-button").addEventListener("click", function() {
    toggleShortItems(false);
});

function adjustShortGridItem() {
    if (document.querySelector(".show-less-short-button").classList.contains("hidden")) {
        let maxGridItem = getShortItemsShowCount();
        const gridContainer = document.querySelector(".shorts-grid");
        let gridsCount = gridContainer.querySelectorAll("div.short-item").length;

        for (let i = 0; i <= gridsCount - 1; i++) {
            gridContainer.querySelectorAll("div.short-item")[i].classList.toggle("hidden", i >= maxGridItem);
        }
    }
}

document.addEventListener("DOMContentLoaded", adjustShortGridItem);
window.addEventListener("resize", adjustShortGridItem);


document.querySelector("i.ti-menu").addEventListener("click", function() {
    document.querySelector("div.sidebar-wrapper").classList.toggle("hidden");

    document.querySelector("div.mini-sidebar").classList.toggle("hidden");

    document
        .querySelector("div.content-wrapper")
        .classList.toggle("ml-[250px]");
    document
        .querySelector("div.content-wrapper")
        .classList.toggle("w-[calc(100%-250px)]");

    document.querySelector("div.content-wrapper").classList.toggle("ml-[80px]");
    document
        .querySelector("div.content-wrapper")
        .classList.toggle("max-w-[calc(100%-80px)]");
});