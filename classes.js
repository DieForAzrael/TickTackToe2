class Event {
    constructor(item, status, placeable) {
        this.item = item
        this.status = status
        this.placeable = placeable
    }
}
class GameModes{
    constructor(name, event){
        this.name = name
        this.event = event
    }
}
class LuckyBlockEvents {
    constructor(name, effect, duration, event) {
        this.name = name
        this.effect = effect
        this.duration = duration
        this.event = event
    }
}
class Table {
    constructor(cells) {
        this.cells = cells
    }
    getCellIdwCell(gcell) {
        for (const cell of this.cells) {
            if (gcell == cell) {
                let id = cell.y + "-" + cell.x
                return id
            }
        }
    }
    getCell(x, y) {
        for (const cell of this.cells) {
            if (cell.x == x && cell.y == y) {
                return cell
            }
        }
    }
    getCellwCell(gcell) {
        for (const cell of this.cells) {
            if (gcell == cell) {
                return cell
            }
        }
    }
    changeStatus(cell, status) {
        cell.status = status
    }
    setItem(cell, item) {
        if (cell.item == 0) {
            cell.item = item
        }
    }
    Event(cell, event) {
        cell.status = event.status
        cell.item = event.item
        cell.placeable = event.placeable
    }
}


class Cell {
    constructor(x, y, item, status, placeable) {
        this.x = x
        this.y = y
        this.item = item
        this.status = status
        this.placeable = placeable
    }

}

//events
var voidEvent = new Event("void", false, false)
var clearACell = new Event(0, true, true)
var luckyBlock = new Event("lb", true, true)

//events for lb
var sc = new Event(0, true, true)
//lb events
var speedGame = new LuckyBlockEvents("Speed Game", "The win condition is decreased to 3", 4, "")
var doubleTurn = new LuckyBlockEvents("Double Turn", "It's your turn again", 1, "")
var selfClear = new LuckyBlockEvents("Self Clear", "20% of your cells vanish", 1, clearACell)
var clearBonus = new LuckyBlockEvents("Clear Bonus", "20% of your opponent's cells vanish", 1, clearACell)
var secret = new LuckyBlockEvents("Secret", "You will never find out", 15, "", "")
var casualEvent = new LuckyBlockEvents("Casual Event", "A casual game event triggers", 1, "")

var events = [voidEvent, clearACell, luckyBlock]

var lbevents = [doubleTurn, selfClear, clearBonus, secret, casualEvent, speedGame]

const first = new GameModes("Clean", 0)
const secon = new GameModes("Normal", 20)
const third = new GameModes("Chaos", 100)

const GAME_MODES = [first, secon, third]

export { Cell, Table, events, lbevents, GAME_MODES}

