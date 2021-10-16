import {createAppContainer, createSwitchNavigator} from 'react-navigation';

import Welcome from './pages/Welcome';
import Main from './pages/Main';
import NewEntry from './pages/NewEntry';
import Report from './pages/Report';
import Loading from './pages/Loading';
const Routes = createAppContainer(
  createSwitchNavigator(
    {
      Loading,
      Welcome,
      Main,
      NewEntry,
      Report,
    },
    {
      initialRouteName: 'Loading',
      backBehavior: 'history',
    },
  ),
);

export default Routes;
