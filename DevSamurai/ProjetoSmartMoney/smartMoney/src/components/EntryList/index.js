import React from 'react';
import {FlatList} from 'react-native';

import {LogBox} from 'react-native';

import Container from '../Core/Container';

import EntryListItem from './EntryListItem';

import useEntries from '../../hooks/useEntries';

LogBox.ignoreLogs(['VirtualizedLists should never be nested']);

const EntryList = ({days = 7, category, onEntryPress, onPressActionButton}) => {
  const [entries] = useEntries(days, category);

  return (
    <Container
      title="Últimos lançamentos"
      actionLabelText={`Últimos ${days} dias`}
      actionButtonText="Ver mais"
      onPressActionButton={onPressActionButton}>
      <FlatList
        data={entries}
        keyExtractor={item => item.id}
        renderItem={({item, index}) => (
          <EntryListItem
            entry={item}
            isFirstItem={index === 0}
            isLastItem={index === entries.length - 1}
            onEntryPress={onEntryPress}
          />
        )}
      />
    </Container>
  );
};

export default EntryList;
