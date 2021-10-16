import React from 'react';
import {View, ScrollView, StyleSheet, SafeAreaView} from 'react-native';

import BalancePanel from '../../components/BalancePanel';
import EntrySummary from '../../components/EntrySummary';
import EntryList from '../../components/EntryList';
import Grafico from '../../components/Grafico';
import Colors from '../../styles/Colors';

const Main = ({navigation}) => {
  return (
    <View style={styles.container}>
      <BalancePanel onNewEntryPress={() => navigation.navigate('NewEntry')} />
      <SafeAreaView style={{flex: 1}}>
        <ScrollView>
          <Grafico />
          <EntrySummary
            onPressActionButton={() => navigation.navigate('Report')}
          />
          <EntryList
            onEntryPress={entry =>
              navigation.navigate('NewEntry', {
                entry: entry,
              })
            }
            onPressActionButton={() => navigation.navigate('Report')}
          />
        </ScrollView>
      </SafeAreaView>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: Colors.background,
  },
});

export default Main;
