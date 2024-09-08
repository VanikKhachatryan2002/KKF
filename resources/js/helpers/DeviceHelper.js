// helpers/DeviceHelper.js

class DeviceHelper {
    /**
     * Checks if the current device is mobile.
     * @returns {boolean} True if the device is mobile, false otherwise.
     */
    static isMobile() {
        return /Mobi|Android/i.test(navigator.userAgent);
    }
}

if (typeof module !== 'undefined') {
    module.exports = DeviceHelper;
}
