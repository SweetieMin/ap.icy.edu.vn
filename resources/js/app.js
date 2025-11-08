import Sortable from 'sortablejs';
window.Sortable = Sortable;
import Chart from 'chart.js/auto';
window.Chart = Chart;

import {
    browserSupportsWebAuthn,
    startAuthentication,
    startRegistration,
} from '@simplewebauthn/browser'

window.browserSupportsWebAuthn = browserSupportsWebAuthn;
window.startAuthentication = startAuthentication;
window.startRegistration = startRegistration;