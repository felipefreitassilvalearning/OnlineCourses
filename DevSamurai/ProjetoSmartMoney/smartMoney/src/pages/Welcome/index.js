/* eslint-disable prettier/prettier */
import React, {useState} from 'react';
import {View, Image, StyleSheet, Text, TouchableOpacity} from 'react-native';

import ActionFooter, {
  ActionPrimaryButton,
} from '../../components/Core/ActionFooter';

import LinearGradient from 'react-native-linear-gradient';

import WelcomeMessage from './WelcomeMessage';
import WelcomeBalanceInput from './WelcomeBalanceInput';

import useCategories from '../../hooks/useCategories';
import {saveEntry} from '../../services/Entries';
import {setInitialized} from '../../services/Welcome';

import Colors from '../../styles/Colors';
import Logo from '../../assets/farroupscash.png';

const Welcome = ({navigation}) => {
  const [, , , initCategories] = useCategories();
  const [amount, setAmount] = useState(0);

  const onSavePress = () => {
    saveEntry({
      amount: amount,
      isInit: true,
      category: initCategories,
    });

    setInitialized();
    navigation.navigate('Main');
  };

  return (
    <View style={styles.container}>
      <LinearGradient 
      colors={[Colors.violetDark, Colors.turquese]}
      style={styles.panel}
      height="100%"
      >
      <View style={styles.logo}>
        <Image source={Logo} />
      </View>
      <WelcomeMessage />
      <WelcomeBalanceInput value={amount} onChangeValue={setAmount} />
        <TouchableOpacity style={styles.primaryButton} onPress={onSavePress}>
          <Text style={styles.primaryButtonText}>
            Continuar
          </Text>
        </TouchableOpacity>
      </LinearGradient>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: Colors.background,
  },
  logo: {
    alignItems: 'center',
    marginTop: 60,

  },
  panel: {},
  primaryButtonText: {
    fontSize: 18,
    textAlign: 'center',
    color: Colors.green,
  },
  primaryButton: {
    borderRadius: 150,
    borderWidth: 1,
    borderColor: Colors.green,
    paddingVertical: 10,
    paddingHorizontal: 10,
    marginHorizontal: 15,
    backgroundColor: Colors.asphalt,
  },
});

export default Welcome;
